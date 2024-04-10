$( document ).ready(function() {
// fixed header
$(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    if (scrollTop >= 100) {
        $('body').addClass('fixed-header');
    } else {
        $('body').removeClass('fixed-header');
    }
});

//Small Device Nav Collapse
$(document).ready(function(){
  if($(window).width() <= 1024){
    $('.mega-menu-submenu-list,.submenu-list').addClass('collapse');
  }else{
    $('.mega-menu-submenu-list,.submenu-list').removeClass('collapse');
  }
  $(window).resize(function(){
    if($(window).width() <= 1024){
      $('.mega-menu-submenu-list,.submenu-list').addClass('collapse');
    }else{
      $('.mega-menu-submenu-list,.submenu-list').removeClass('collapse');
    }
  });
});

// Small Device Submenu Show and Hide
$('.item-has-mega-menu .nav-item-link').on('click', function(e){
    e.preventDefault();
    $('.mega-menu-submenu-list').collapse('toggle');
});

// Small Device Submenu Show and Hide
$('.mega-menu-submenu-list-item-link').on('click', function(e){
    e.preventDefault();
    $(this).closest('.mega-menu-submenu-list-item').find('.collapse').collapse('toggle');
});


// Navbar Toggle Button For Mini Device
$('.nav-toggle-btn').click(function() {
    $('.nav-items-wrapper').toggleClass('menu-visible');
    $('body').toggleClass('body-overflow');
});

$('.slider-items-wrapper').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    autoplay:true,
    autoplayHoverPause:true,
    autoplayTimeout: 10000,
    // animateOut: 'fadeOut',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// Counter Js
if ($(".counter-item-wrapper").length > 0) {
    $(window).scroll(testScroll);
    var viewed = false;

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function testScroll() {
        if (isScrolledIntoView($(".counter-item-wrapper")) && !viewed) {
            viewed = true;
            $('.counter').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
    }
  }

// Scroll top
$(window).on('scroll', function() {
    if ($(this).scrollTop() > 1) {
        $('.scroll-back-top').css({
            bottom: "80px"
        });
    } else {
        $('.scroll-back-top').css({
            bottom: "-100px"
        });
    }
});
$('.scroll-back-top').on('click', function(event) {
    event.preventDefault();
    $('html , body').animate({
        scrollTop: 0,
    }, 1500);
});

//Testimonial Slider Js
$('.testimonial-items-wrapper').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});

//Testimonial Slider Js
$('.client-items-wrapper').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});

//Product Details Slider

// $('.slider-for').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: false,
//     fade: true,
//     asNavFor: '.slider-nav'
//   });
//   $('.slider-nav').slick({
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     asNavFor: '.slider-for',
//     dots: false,
//     arrows: false,
//     centerMode: true,
//     focusOnSelect: true
//   });
  
  //Product Qty 
  
  $(".qtyminus").on("click",function(){
      var now = $(".qty").val();
      if ($.isNumeric(now)){
          if (parseInt(now) -1> 0)
          { now--;}
          $(".qty").val(now);
      }
  })            
  $(".qtyplus").on("click",function(){
      var now = $(".qty").val();
      if ($.isNumeric(now)){
          $(".qty").val(parseInt(now)+1);
      }
  });

  //Password show hide js
$("#icon").on('click',function(){
    var input = document.getElementById('password');
    $(this).toggleClass("fa-eye fa-eye-slash");
    // var input = $($(this).attr("toggle"));
    if ($("#password").attr("type")=="password") {
        $("#password").attr("type", "text");
      } else {
        $("#password").attr("type", "password");
      }    
});



// (function($) {
//     /*--
// 		Menu Active
//     -----------------------------------*/
//     $(function() {
//         var url = window.location.pathname;
//         var activePage = url.substring(url.lastIndexOf('/') + 1);
//         $('.nav-menu li a').each(function() {
//             var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1);

//             if (activePage == linkPage) {
//                 $(this).closest("li").addClass("active");
//             }
//         });
//     });
// })(jQuery);


// Message Box Show Hide
$('.botIconContainer').click(function() {
    $('.Layout-right').toggleClass('visible');
});
$('.chat_close_icon').click(function() {
    $('.Layout-right').removeClass('visible');
});


// // Image Gallery
// if ( $(".image-grid-inner").length>0 ){
//   lightGallery();
//   lightBox();
// }

// // Window Resize Event
// $(window).resize(function(){
//   lightGallery();
// });

// Document Ready Event
$(document).ready(function(){
  setTimeout(function(){
    $('.image-grid-inner').addClass('loaded');
  },1000);
});


// // Light Gallery Function
// function lightGallery(){
//   $('body').imagesLoaded( function() {
//     $('.image-grid-inner').GridHorizontal({
//       item: '.image-grid-inner .item',
//       minWidth: 400,
//       maxRowHeight: 350,
//       gutter: 5,
//     });
//   });
// }

// // LightBox Function
// function lightBox(){
//   (function() {
//       var $gallery = new SimpleLightbox('.image-grid-inner a', {});
//   })();
// }


// Accordion js

const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        } else {
            accordionItemBody.style.maxHeight = 0;
        }

    });
});

// Vimeo,Youtube Video Popup
// $(document).ready(function() {
//     $('.video-play-button').magnificPopup({
//         disableOn: 0,
//         type: 'iframe',
//         mainClass: 'mfp-fade',
//         removalDelay: 160,
//         preloader: false,
//         fixedContentPos: false
//     });
// });





});