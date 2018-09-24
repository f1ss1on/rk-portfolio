const minify = true;

const sassDev = `./scss/**`;
const sassDist = `./css`;

const gulp = require('gulp');
const sass = require('gulp-sass');
const cssDeclarationSorter = require('css-declaration-sorter');
const cssnano = require('gulp-cssnano');
const gulpPostcss = require('gulp-postcss');
const glob = require('glob');
const sassGlob = require('gulp-sass-glob');
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');
const gulpif = require('gulp-if');
const runSequence = require('run-sequence');
const autoprefixer = require('gulp-autoprefixer');
const stripCssComments = require('gulp-strip-css-comments');

gulp.task('sass', function() {
  console.log('Compiling SASS');
  return gulp.src(`${sassDev}/*.scss`)
    .pipe(sassGlob())
    .pipe(gulpif(minify, sass({
      outputStyle: 'compressed',
      precision: 8
    }), sass({
      outputStyle: 'expanded',
      precision: 8
    })))
    .pipe(gulpif(minify, rename({
      suffix: '.min'
    })))
    .on('error', sass.logError)
    .pipe(autoprefixer({
      browsers: ['last 2 version'],
      cascade: false
    }))
    .pipe(gulpPostcss([cssDeclarationSorter({
      order: 'concentric-css'
    })]))
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest(sassDist));
});
/*gulp.task('sass', function () {
  return gulp.src(`${sassDev}/*.scss`)
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(sassDist));
});*/

gulp.task('watch', function() {
  gulp.watch(`${sassDev}/*.scss`, ['sass']);
});

gulp.task('default', function(callback) {
  runSequence(['sass', 'watch'],
    callback
  );
});
