jQuery(document).ready(function ($) {
	if ($(document).height() <= $(window).height())
	  $("footer").addClass("navbar-fixed-bottom");

	 $(document).ready(function() {
		 $('.minus').click(function () {
			 var $input = $(this).parent().find('input');
			 var count = parseInt($input.val()) - 1;
			 count = count < 1 ? 1 : count;
			 $input.val(count);
			 $input.change();
			 return false;
		 });
		 $('.plus').click(function () {
			 var $input = $(this).parent().find('input');
			 $input.val(parseInt($input.val()) + 1);
			 $input.change();
			 return false;
		 });
	 });
	
	$(".main-post-desc").text(function(i, text) {

	  if (text.length >= 190) {
		text = text.substring(0, 190);
		var lastIndex = text.lastIndexOf(" ");       // позиция последнего пробела
		text = text.substring(0, lastIndex) + '...'; // обрезаем до последнего слова
	  }

	  $(this).text(text);

	});
	
	
});