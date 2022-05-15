$(document).ready(function(){
	if ($('.critem').length)
	{
		$('.critem').each(function(){
			var $imgs = $(this).find('.critem__imgs');
			var $list = $imgs.find('.critem__imgs-list');
			$list.slick({
				speed: 700,
				arrows:false,
				dots: true,
				dotsClass: 'critem__imgs-pages',
				appendDots: $imgs
			});
		});
	}
});