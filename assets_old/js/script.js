/*-------------------------------
            Navbar
--------------------------------*/
$(function(){

    $(window).scroll(function(){
        if ($(window).scrollTop() >= 70) {
            $('#navigation-menu').addClass('fixed');
            $('#all-products').addClass('margintop');

$('#navigation-menu').css('z-index','999999999');
            // $('nav div').addClass('visible-title');
        }
        else {
            $('#navigation-menu').removeClass('fixed');
            $('#all-products').removeClass('margintop');
            // $('nav div').removeClass('visible-title');
        }
    });
    
});
/*-------------------------------
         Banner Carousel
--------------------------------*/
$(function(){
    $('.bannerCarousel').owlCarousel({
        items: 1,
        autoplay: !0,
        smartSpeed: 750,
        loop: !0,
        autoplayHoverPause: !0,
        nav: !0,
        dots: !1,
        margin:10,
        navText: ['<i class="fas fa-chevron-circle-left"></i>', '<i class="fas fa-chevron-circle-right"></i>'],
    })
});
$(function(){
    $('.featuredProductsCarousel').owlCarousel({
        loop:true,
        dots: !1,
        margin:0,
        responsiveClass:true,
        navText: ['<i class="fas fa-chevron-circle-left"></i>', '<i class="fas fa-chevron-circle-right"></i>'],
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:6,
                nav:true,
                loop:false
            }
        }
    });
});
   
$(function(){
    $('.relatedProductsCarousel').owlCarousel({
        loop:true,
        dots: !1,
        margin:10,
        responsiveClass:true,
        navText: ['<i class="fas fa-chevron-circle-left"></i>', '<i class="fas fa-chevron-circle-right"></i>'],
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:6,
                nav:true,
                loop:false
            }
        }
    });

    $('.latestProductsCarousel').owlCarousel({
        loop:true,
        dots: !1,
        margin:0,
        responsiveClass:true,
        navText: ['<i class="fas fa-chevron-circle-left"></i>', '<i class="fas fa-chevron-circle-right"></i>'],
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:6,
                nav:true,
                loop:false
            }
        }
    });
});
/*-------------------------------
         Category
--------------------------------*/
$(function(){
$('.toggleButton').click(function(){
$('.filtr-button-container').toggleClass('d-none');
$('.filtr-button-container').css('width','350px');
$('.filtr-button-container').css('background-color','#fff');
$('.filtr-button-container').css('z-index','999999');
});
$('.filtr-button').click(function(){
    $('.filtr-button-container').toggleClass('d-none');
});
$('.buyer-link').click(function(){
    $('#Seller').removeClass('d-block');
});
});

/*-------------------------------
         Billing Page
--------------------------------*/
// $(function(){
//     $('#same_as_billing').change(function(){
//         $('#shipping_fname').val($('#billing_fname').val());
//         $('#shipping_lname').val($('#billing_lname').val());
//         $('#shipping_address').val($('#billing_address').val());
//         $('#shipping_country').val($('#billing_country').val());
//         $('#shipping_state').val($('#billing_state').val());
//         $('#shipping_city').val($('#billing_city').val());
//         $('#shipping_postal_code').val($('#billing_postal_code').val());
//         $('#shipping_phone').val($('#billing_phone').val());
//         $('#shipping_email').val($('#billing_email').val());
//     });
// });




$(document).ready(function(){
    $('#same_as_billing').click(function(){
        if($(this).prop("checked") == true){
               $('#shipping_fname').val($('#billing_fname').val());
        $('#shipping_lname').val($('#billing_lname').val());
        $('#shipping_address').val($('#billing_address').val());
        $('#shipping_country').val($('#billing_country').val());
        $('#shipping_state').val($('#billing_state').val());
        $('#shipping_city').val($('#billing_city').val());
        $('#shipping_postal_code').val($('#billing_postal_code').val());
        $('#shipping_phone').val($('#billing_phone').val());
        $('#shipping_email').val($('#billing_email').val());
        }
        else if($(this).prop("checked") == false){
            $('#shipping_fname').val("");
            $('#shipping_lname').val("");
            $('#shipping_address').val("");
            $('#shipping_country').val("");
            $('#shipping_state').val("");
            $('#shipping_city').val("");
            $('#shipping_postal_code').val("");
            $('#shipping_phone').val("");
            $('#shipping_email').val("");
        }
    });
});

$(function(){
$('.dropdown-toggle').click(function(){
$('.dropdown-menu').slideToggle();
});
});