<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<section id="intro">
  <article>
    <div class="inner">
      <h1 class="section-title">Hello, I'm <a href="#">Riad Kilani</a>, <br />A Front End Web Developer</h1>
      <h2>I like to make the web a more beautiful place one pixel at a time.</h2>
      <p>I focus on usable, standards websites and web applications targeted with high business outcome.</p>
      <p>I combine development with design to create the best user experiences that return exeptional business results.</p>
      <button class="normal cta">Find out how it's done</button>
    </div>
  </article>
</section>
<section id="about">

  <div class="inner">
    <article>
      <h1 class="section-title">About <a href="#">Riad Kilani</a></h1>
      <p>My technical job title is a "<a href="#">Front-end Developer</a>", and the easiest way to explain what I do is simple. I bring creative designs to life by making them work on the web.</p>
      <p>Truthfully, there is more to it than just that. What I really do is bring web designs to life by using things like typography, color, semantics, code and other web snazzy terms, and make them work together as a single unit. The end
        results are web sites that are user friendly with great user experiences. It's a good thing I do this every day, because I can not only make your web sites look good, but I can also make them work for you, your business and your clients.</p>
      <p>Being a front end developer is how I make a living, but I also enjoy the technical sides as well. I thrive on the "geek" in me to build solid, responsive websites, and at the same time, I have that creative kid in me that can design
        stunning graphical creations too.</p>
    </article>
    <span class="spacer"></span>
    <h2>What I Do</h2>
    <div class="modular-container gap-defalut">
      <div class="modular-item">
        <div class="modular-image">
          <img width="640" height="446" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/web-design-riad-kilani.png" class="attachment-large size-large" alt="Web Design - Riad Kilani" srcset="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/web-design-riad-kilani.png 800w, <?php bloginfo('url'); ?>/wp-content/uploads/2018/09/web-design-riad-kilani-300x209.png 300w, <?php bloginfo('url'); ?>/wp-content/uploads/2018/09/web-design-riad-kilani-768x535.png 768w" sizes="(max-width: 640px) 100vw, 640px">
          <div class="modular-caption">
            <p>
              Web Design
            </p>
          </div>
        </div>
      </div>
      <div class="modular-item">
        <div class="modular-image">
          <img width="640" height="446" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/development-riad-kilani.png" class="attachment-large size-large" alt="Development - Riad Kilani" srcset="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/development-riad-kilani.png 800w, <?php bloginfo('url'); ?>/wp-content/uploads/2018/09/development-riad-kilani-300x209.png 300w, <?php bloginfo('url'); ?>/wp-content/uploads/2018/09/development-riad-kilani-768x535.png 768w" sizes="(max-width: 640px) 100vw, 640px">
          <div class="modular-caption">
            <p>
              Development
            </p>
          </div>
        </div>
      </div>
      <div class="modular-item">
        <div class="modular-image">
          <img width="640" height="446" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/web-marketing-riad-kilani.png" class="attachment-large size-large" alt="Web Marketing - Riad Kilani" srcset="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/web-marketing-riad-kilani.png 800w, <?php bloginfo('url'); ?>/wp-content/uploads/2018/09/web-marketing-riad-kilani-300x209.png 300w, <?php bloginfo('url'); ?>/wp-content/uploads/2018/09/web-marketing-riad-kilani-768x535.png 768w" sizes="(max-width: 640px) 100vw, 640px">
          <div class="modular-caption">
            <p>
              Marketing
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="skills">

  <div class="inner">


    <h2>Skills</h2>
    <div class="flex-wrapper">
      <div class="lefthold">
        <div id="skillsets"></div>
      </div>

      <ul class="skills-list">
        <li class="progress">
          <div class="progress-bar html5">
            <span>UI Design</span>
          </div>
        </li>
        <li class="progress">
          <div class="progress-bar css3">
            <span>UX Development</span>
          </div>
        </li>
        <li class="progress">
          <div class="progress-bar javascript">
            <span>Interactive Design</span>
          </div>
        </li>
        <li class="progress">
          <div class="progress-bar php">
            <span>Drupal</span>
          </div>
        </li>
        <li class="progress">
          <div class="progress-bar wordpress">
            <span>Wordpress</span>
          </div>
        </li>
      </ul>
    </div>
    <button class="normal alt cta">Let's work together</button>
  </div>
</section>
<section id="work">
  <div class="inner-content">
    <h1 class="section-title">Work</h1>
    <div class="featured"> <a href="http://saveur.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/saveur.jpg" alt="Saveur.com"> <span>Saveur</span></a> </div>
    <div class="other-work">
      <div class="project"> <a href="http://aplusemail.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aplusemail.PNG" alt="aplusemail.com"> <span>A+ Email</span></a> </div>
      <div class="project"> <a href="http://modcrash.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/modcrash.PNG" alt="ModCrash.com"> <span>ModCrash</span></a> </div>
      <div class="project"> <a href="http://fieldandstream.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bmielite-book.PNG" alt="Field and Stream"> <span>Field &amp; Stream</span></a> </div>
    </div>
    <div class="spacer"></div>
    <button href="http://riadkilani.com/portfolio" class="normal cta" target="_blank">View More Work</button> </div>
</section>

<?php get_footer(); ?>
