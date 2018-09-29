//Main JS Functions
jQuery(document).ready(function($) {
  /*JS FOR LOADING
  setTimeout(function() {
    $("body").addClass("loaded");
  }, 2000);*/


  //Smooth Scrolling
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top
            },
            1000
          );
          return false;
        }
      }
    });
  });

  //Sticky Header
  $(window).scroll(function() {
    if ($(this).scrollTop() > 1) {
      $(".site-header").addClass("sticky");
    } else {
      $(".site-header").removeClass("sticky");
    }
  });


  //Background Movement with Mouse
  /*$('#about').mousemove(function(e){
    var amountMovedX = (e.pageX * -1 / 6);
    var amountMovedY = (e.pageY * -1 / 6);
    $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
});*/

  //Give Nav some Navbar Action
  $("#primary-menu").addClass("navbar");

  //Adds alternate background color to sections
  $(".content-wrapper section:odd").css("background-color", "#f3f3f3");

  //Add class to mobil social button
  $(".mobile-social").click(function() {
    $(this).toggleClass("open");
  });
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top
            },
            1000
          );
          return false;
        }
      }
    });
  });



  /*
* Function to animate leaving a page
*/
  $.fn.leavePage = function() {
    this.click(function(event) {
      // Don't go to the next page yet.
      event.preventDefault();
      linkLocation = this.href;

      // Fade out this page first.
      $("body").fadeOut(500, function() {
        // Then go to the next page.
        window.location = linkLocation;
      });
    });
  };

  $(".mobile-button").click(function(event) {
    $("#content").toggleClass("mobile-open");
    event.stopPropagation();
  });

  $(document).click(function(event) {
    if (!$(event.target).hasClass('link')) {
      $("#content").removeClass("mobile-open");
    }
  });

  /*
* Call the leavePage function upon link clicks with the "transition" class
*/
  $(".transition").leavePage();




}); //End NoConflict jQuery Wrapper
var colors = Highcharts.getOptions().colors,
  categories = [
    "Web Design",
    "Development",
    "Marketing"
  ],
  data = [
    {
      "y": 39,//UX
      "color": colors[2],
      "drilldown": {
        "name": "Web",
        "categories": [
          "UI Design",
          "UX",
          "Accessibility",
          "Information Architexture",
          "Graphic Design"
        ],
        "data": [
          12,
          13,
          3,
          5,
          6
        ]
      }
    },
    {
      "y": 50,//Web
      "color": colors[0],
      "drilldown": {
        "name": "Web",
        "categories": [
          "HTML5",
          "CSS3",
          "JavaScript",
          "Angular",
          "React",
          "PHP",
          "SASS"
        ],
        "data": [
          10,
          10,
          8,
          5,
          3,
          4,
          10
        ]
      }
    },
    {
      "y": 24,//Design
      "color": colors[3],
      "drilldown": {
        "name": "Marketing",
        "categories": [
          "Analytics",
          "A/B Testing",
          "Ad Performance"
        ],
        "data": [
          10,
          9,
          5
        ]
      }
    }
  ],
  skillData = [],
  versionsData = [],
  i,
  j,
  dataLen = data.length,
  drillDataLen,
  brightness;


// Build the data arrays
for (i = 0; i < dataLen; i += 1) {

  // add browser data
  skillData.push({
    name: categories[i],
    y: data[i].y,
    color: data[i].color
  });

  // add version data
  drillDataLen = data[i].drilldown.data.length;
  for (j = 0; j < drillDataLen; j += 1) {
    brightness = 0.2 - (j / drillDataLen) / 5;
    versionsData.push({
      name: data[i].drilldown.categories[j],
      y: data[i].drilldown.data[j],
      color: Highcharts.Color(data[i].color).brighten(brightness).get()
    });
  }
}

// Create the chart
Highcharts.chart('skillsets', {
  chart: {
    backgroundColor: 'rgba(255, 255, 255, 0.0)',
    type: 'pie'
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  yAxis: {
    title: {
      text: ''
    }
  },
  plotOptions: {
    pie: {
      shadow: false,
      center: ['40%', '40%']
    }
  },
  tooltip: {
    valueSuffix: '%'
  },
  series: [{
    name: 'Skills',
    data: skillData,
    size: '50%',
    dataLabels: {
      formatter: function () {
        return this.y > 5 ? this.point.name : null;
      },
      color: '#ffffff',
      distance: -60
    }
  }, {
    name: 'Versions',
    data: versionsData,
    size: '60%',
    innerSize: '80%',
    dataLabels: {
      formatter: function () {
        // display only if larger than 1
        return this.y > 1 ? '<b>' + this.point.name + ':</b> ' +
          this.y + '%' : null;
      }
    },
    id: 'versions'
  }],
  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        series: [{
          id: 'versions',
          dataLabels: {
            enabled: false
          }
        }]
      }
    }]
  }
});
