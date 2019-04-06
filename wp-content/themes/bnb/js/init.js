jQuery(document).ready(function ($) {
// reference for main items
  var slider = $('.product-slider');
  // reference for thumbnail items
  var thumbnailSlider = $('.thumbnail-product-slider');
  //transition time in ms
  var duration = 500;

  // carousel function for main slider
  slider.owlCarousel({
   loop:true,
   nav:false,
   dots: false,
   items:1
  }).on('changed.owl.carousel', function (e) {
   //On change of main item to trigger thumbnail item
   thumbnailSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
  });

  // carousel function for thumbnail slider
  thumbnailSlider.owlCarousel({
   loop:false,
   nav:false,
   items:3,
   margin: 5,
   dots: false
  }).on('click', '.owl-item', function () {
   // On click of thumbnail items to trigger same main item
   slider.trigger('to.owl.carousel', [$(this).index(), duration, true]);

  }).on('changed.owl.carousel', function (e) {
   // On change of thumbnail item to trigger main item
   slider.trigger('to.owl.carousel', [e.item.index, duration, true]);
  });

$('#header-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
	autoplay: true,
   	autoplayHoverPause: true,
    items: 1
})
$('.slider-right').click(function() {
   $('#header-carousel').trigger('next.owl.carousel');
});
$('.slider-left').click(function() {
   $('#header-carousel').trigger('prev.owl.carousel');
});

$('.product-carousel').owlCarousel({
    loop:false,
    margin:10,
    dots:false,
    nav: false,
	autoHeight:true,
	responsiveClass:true,
    responsive: {
		0 : {
			items: 1
		},
		480 : {
			items: 3
		}
	}
	
})
$('.slider-right').click(function() {
   $('.product-carousel').trigger('next.owl.carousel');
});
$('.slider-left').click(function() {
   $('.product-carousel').trigger('prev.owl.carousel');
});
});