jQuery(document).ready(function($){

  $('.filter_tags').on('click', function(){



  });

  setTimeout(() => {

    document.getElementById('video').play();

  }, 500);

    $('.main-gallery-3').flickity({

      cellAlign: 'left',
      draggable: false,
      autoPlay: 9000,
      infiniteLoop: true
    });

    $('.main-gallery').flickity({

      cellAlign: 'left',
      draggable: false,
      autoPlay: 5000,
      pauseAutoPlayOnHover: true

    });

    $('.main-gallery-2').flickity({

      cellAlign: 'left',
      draggable: false,

    });

	$('.bx-prev').on('click', function(){

		$(this).addClass('animate_slider_arrow');
		$(this).removeClass( "animate_slider_arrow", 4000, "easeInBack" );

	});

  $('.logo_menu').on('click', function(){

    $('.menu-principal').toggleClass('menu-open');
    $(this).toggleClass('toggle-right');
    $('body').toggleClass('body-open');
    $(this).toggleClass('change');
    $('.blur-test').toggleClass('active');
    $('.logo_exit').css('display', 'block');

  });

  $('.logo_exit').on('click', function(){

    $(".menu-principal").toggleClass('menu-open');
    $("body").toggleClass('body-open');
    $('.blur-test').toggleClass('active');

  });

  $('#fullpage').fullpage({
    anchors: ['section1', 'section2', 'section3', 'section4'],
    responsiveWidth: 768
  });

  $("#presentation_onglet_pres").click(function(){

      $("#pres_1").css("display", "block");
      $("#pres_2").css("display", "none");
      $("#pres_3").css("display", "none");
      $("#pres_4").css("display", "none");

      $("#presentation_onglet_pres").addClass("presentation_onglet_default");
      $("#presentation_onglet_test").removeClass("presentation_onglet_default");
      $("#presentation_onglet_expertise").removeClass("presentation_onglet_default");
      $("#presentation_onglet_archeo").removeClass("presentation_onglet_default");

      $("#presentation_video_img1").css("display", "block");
      $("#presentation_video_img2").css("display", "none");
      $("#presentation_video_img3").css("display", "none");
      $("#presentation_video_img4").css("display", "none");

      $("#charpente_application_1").css("display", "block");
      $("#charpente_application_2").css("display", "none");
      $("#charpente_application_3").css("display", "none");
      $("#charpente_application_4").css("display", "none");

  });

  $("#presentation_onglet_test").click(function(){

      $("#pres_1").css("display", "none");
      $("#pres_2").css("display", "block");
      $("#pres_3").css("display", "none");
      $("#pres_4").css("display", "none");

      $("#presentation_onglet_test").addClass("presentation_onglet_default");
      $("#presentation_onglet_pres").removeClass("presentation_onglet_default");
      $("#presentation_onglet_expertise").removeClass("presentation_onglet_default");
      $("#presentation_onglet_archeo").removeClass("presentation_onglet_default");

      $("#presentation_video_img1").css("display", "none");
      $("#presentation_video_img2").css("display", "block");
      $("#presentation_video_img3").css("display", "none");
      $("#presentation_video_img4").css("display", "none");

      $("#charpente_application_1").css("display", "none");
      $("#charpente_application_2").css("display", "block");
      $("#charpente_application_3").css("display", "none");
      $("#charpente_application_4").css("display", "none");

  });

  $("#presentation_onglet_expertise").click(function(){

      $("#pres_1").css("display", "none");
      $("#pres_2").css("display", "none");
      $("#pres_3").css("display", "block");
      $("#pres_4").css("display", "none");

      $("#presentation_onglet_expertise").addClass("presentation_onglet_default");
      $("#presentation_onglet_pres").removeClass("presentation_onglet_default");
      $("#presentation_onglet_test").removeClass("presentation_onglet_default");
      $("#presentation_onglet_archeo").removeClass("presentation_onglet_default");

      $("#presentation_video_img1").css("display", "none");
      $("#presentation_video_img2").css("display", "none");
      $("#presentation_video_img3").css("display", "block");
      $("#presentation_video_img4").css("display", "none");

      $("#charpente_application_1").css("display", "none");
      $("#charpente_application_2").css("display", "none");
      $("#charpente_application_3").css("display", "block");
      $("#charpente_application_4").css("display", "none");

  });

  $("#presentation_onglet_archeo").click(function(){

      $("#pres_1").css("display", "none");
      $("#pres_2").css("display", "none");
      $("#pres_3").css("display", "none");
      $("#pres_4").css("display", "block");

      $("#presentation_onglet_archeo").addClass("presentation_onglet_default");
      $("#presentation_onglet_pres").removeClass("presentation_onglet_default");
      $("#presentation_onglet_test").removeClass("presentation_onglet_default");
      $("#presentation_onglet_expertise").removeClass("presentation_onglet_default");

      $("#presentation_video_img1").css("display", "none");
      $("#presentation_video_img2").css("display", "none");
      $("#presentation_video_img3").css("display", "none");
      $("#presentation_video_img4").css("display", "block");

      $("#charpente_application_1").css("display", "none");
      $("#charpente_application_2").css("display", "none");
      $("#charpente_application_3").css("display", "none");
      $("#charpente_application_4").css("display", "block");

  });
});
