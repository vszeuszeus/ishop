var isMobileType = $(window).width() >= 940;


$(document).ready(function() {

  if ($('#chartcontainer').length) {
    var myData = new Array([10, 20], [15, 10], [20, 30], [25, 10], [30, 5]);
    var myChart = new JSChart('chartcontainer', 'line');
    myChart.setDataArray(myData);
    // myChart.resize(300, 300);
    myChart.setLineColor('#d32f2f');
    myChart.setAxisNameX('');
    myChart.setAxisNameY('');
    myChart.setTitle('');
    myChart.draw();
};
 if ($('#graph').length) {

    var myData2 = new Array(['2005', 2], ['2006', 1], ['2007', 3], ['2008', 6]);
    var myChart2 = new JSChart('graph', 'bar');
    myChart2.setDataArray(myData2);
    myChart2.setAxisNameX('');
    myChart2.setAxisNameY('');
    myChart2.setTitle('');
    myChart2.setBarColor('#169f89');
    myChart2.setBarOpacity(0.8);
    myChart2.setBarBorderColor('#169f89');
    myChart2.setBarValues(false);
    // myChart2.setTitleColor('#8C8383');
    // myChart2.setAxisColor('#777E81');
    myChart2.setAxisValuesColor('#777E81');
    myChart2.draw();
    
  };

  $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $(this).toggleClass("rotate");
      $("#wrapper").toggleClass("toggled");
  });



    $('.reit_shop').raty({
      starOn: '../images/star_f.png',
      starOff: '../images/star_nf.png'
    });



   setTimeout(function() {
    $('.input_check, .select, .file').styler();
  }, 100)


   Mobile();

    $(window).resize(function() {

        Mobile();
    });

      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          if (!$("#menu-toggle").hasClass('rotate')) {
                $("#menu-toggle").addClass("rotate")
            };

            if (!$("#wrapper").hasClass('toggled')) {
                $("#wrapper").addClass("toggled");
            };
      });

      $('#closas').click(function(e) {
          e.preventDefault();
          if ($("#menu-toggle").hasClass('rotate')) {
                $("#menu-toggle").removeClass("rotate")
            };

            if ($("#wrapper").hasClass('toggled')) {
                $("#wrapper").removeClass("toggled");
            };
      });

      $('.slider_rtov').slick({
          dots: false,
          infinite: false,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
      });

      $('.slider_rew').slick({
        arrow: true,
        dots:false
      });


       $('.slider').slick({
        arrow: true,
        dots:false,
        prevArrow: '.slick-prev',
        nextArrow: '.slick-next'
      });



});

        function Mobile() {

            if ((!window.isMobileType) && $(window).width() < 940) {
             


                // $('#menu').css('display', 'none');

                // $('#menu .ul_drob').css('display', 'block');

                // if ($('#toggle').hasClass('on')) {

                //     $('#menu').slideUp('slow');

                //     $('#toggle').removeClass('on');

                //     $('#menu ul li').children('.ul_drob').css('display', 'none');

                //     $('#menu ul li').children('.drob').css('display', 'none');

                //     $('#menu ul li').removeClass('openli');

                // }

                window.isMobileType = true;

            }

            if (window.isMobileType && $(window).width() >= 940) {
              if ($("#menu-toggle").hasClass('rotate')) {
                $("#menu-toggle").removeClass("rotate")
              };

              if ($("#wrapper").hasClass('toggled')) {
                  $("#wrapper").removeClass("toggled");
              };

                // $('#menu').not('.ul_drob').css('display', 'block');

                // $('#menu .ul_drob').css('display', 'none');

                // console.log('isdes');

                window.isMobileType = false;

            }

        };

