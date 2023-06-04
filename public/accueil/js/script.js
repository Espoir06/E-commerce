$(document).ready(function () {
  // Catagory Toggle
  $('.cat_item_btn').click(function(){
    $('.cat_items').slideToggle(500);
  });  
 // Mobile Menu Show
 $('.mobile-menu-icon').click(function(){
    $('body').toggleClass('bodyOverflow');
   $('.header-button .navber .nav').toggle(500);
 });
// Car Page
 $('.item-body .first-item').click(function(){
   $(this).next('.shop-cart-mobile-item'&&'.shop-wish-mobile-item').toggleClass('shop-cart-mobile-item-active','500');
 });
 // singleShop Product Color Toggle
 $('.product-color-area .product-color a').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
 });
// Countdown Area
    // var now = new Date();
    // var day = now.getDate();
    // var month = now.getMonth() + 1;
    // var year = now.getFullYear() +1;

    // var nextyear = month + '/' + day  + '/' + year;
    $('#example').countdown({
        date: '12/22/2022 1:00:00', // TO DO Date format: 07/27/2017 17:00:00
        offset:-6, // TODO Your Timezone Offset
    }, function (container) {
        alert('Done!');
    });


// Carousel
    $('.hero').owlCarousel({
        loop:true,
        nav:true,
        navText:["<i class='fa fa-angle-left owl-prev'></i>", "<i class='fa fa-angle-right owl-next'></i>"],
        items:1,
    }); 
    // Shop Catagory
    $('.shopCategory').owlCarousel({
        loop:true,
        dots:false,
        nav:true,
        navText:["<i class='fa fa-angle-left owl-prev'></i>", "<i class='fa fa-angle-right owl-next'></i>"],
         responsive:{
            0:{
                items:2
            },
             400:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
    });  
  $('.shop-img ').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        items:4,
    });
    $('.releted-product').owlCarousel({
        loop:true,
        dots:false,
        nav:true,
        navText:["<i class='fa fa-angle-left owl-prev'></i>", "<i class='fa fa-angle-right owl-next'></i>"],
        responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            },
            1200:{
                items:5
            }
        }
    });
  $('.lProduct_item').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText:["<i class='fa fa-angle-left owl-prev'></i>", "<i class='fa fa-angle-right owl-next'></i>"],
        items:1,
    });
 // Client Area
   $('.our-client').owlCarousel({
        loop:true,
        nav:false,
         responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            500:{
                items:3
            },
            1000:{
                items:5
            }
        }
        
    });  
    // Testimonila Area
   $('.testimonial').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
         responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            992:{
                items:2
            }
        }
        
    }); 

   // Cart Count
    $('.increment-btn').click(function (e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value<100){
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }


        });
     $('.decrement-btn').click(function (e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });

    // Single Shop Zoom 
     $('.picZoomer').picZoomer();
      $('.shop-img li a').on('click',function(){
        var $pic = $(this).find('img');
        $('.picZoomer-pic').attr('src',$pic.attr('src'));
      });


    });
// Back to top
/////////////
 $('.backTOtop a').click(function(){
        $('html,body').animate({
            scrollTop: 0,
        },500);

        return true;
    });
     $(window).scroll(function(){
            var scrollvalue = $(this).scrollTop();

            if (scrollvalue>400) {
                $('.backTOtop a').fadeIn();
            } 
            if(scrollvalue<400) {
                $('.backTOtop a').fadeOut();
            }
        });
  // mixitup
   var mixer = mixitup('.featured_product');


