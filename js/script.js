
$(document).ready(function(){
	/*меню в шапке сайта*/
	$('.hd__pmenu').toShowHide({
		button: '.hd__pmenu-l',
		box: '.hd__pmenu-box',
		effect: 'slide',
		anim_speed: 300,
		close_only_button: false,
		onBefore: function(el){
			el.addClass('show_menu_pr_desctop');
		},
		onAfter: function(el){
			el.removeClass('show_menu_pr_desctop');
		}
	});

	$('.header__burger').on('click', function(){
		if ($('.header').is('.show_menu_pr_mobile')){
			if(!$('.header__layout').is("visible")) $('.header__layout').fadeIn(200);
			$('.header').removeClass('show_left');
			setTimeout(function(){$('.header').removeClass('show_menu_pr_mobile');$('.header').addClass('show_menu');},300);
		}
		else if($('.header').is('.show_menu')){
			$('.header__layout').fadeOut(200);
			$('.header').removeClass('show_menu');
		}
		else{
			$('.header__layout').fadeIn(200);
			$('.header').addClass('show_menu');
		}
	});
	$('.header__mobile-profile').on('click', function(){
		if ($('.header').is('.show_menu')){
			if(!$('.header__layout').is("visible")) $('.header__layout').fadeIn(200);
			$('.header').removeClass('show_menu');
			setTimeout(function(){$('.header').addClass('show_menu_pr_mobile show_left');},300);
		}
		else if($('.header').is('.show_menu_pr_mobile')){
			$('.header__layout').fadeOut(200);
			$('.header').removeClass('show_left');
			setTimeout(function(){$('.header').removeClass('show_menu_pr_mobile');},300);
		}
		else{
			$('.header__layout').fadeIn(200);
			$('.header').addClass('show_menu_pr_mobile show_left');
		}
	});

	$('.header__layout').on('click', function(){
		$('.header__layout').fadeOut(200);
		$('.header').removeClass('show_menu  show_left');
		setTimeout(function(){$('.header').removeClass('show_menu_pr_mobile');},300);
	});


	if ($('.critem').length)
	{
		$('.critem').each(function(){
		

			var $imgs = $(this).find('.critem__imgs');	$imgs.HvrSlider();
			/*var $list = $imgs.find('.critem__imgs-list');
			$list.slick({
				speed: 700,
				arrows:false,
				dots: true,
				dotsClass: 'critem__imgs-pages',
				appendDots: $imgs
			});*/
		});
	}


	/*input плюс минус*/
	$('.numb a').on('click', function(){
		const $this = $(this);
		const $this_box = $this.parent();
		const $this_in = $this_box.find('input');
		const $this_step = Number(($this_box.find('input').attr('step'))?$this_box.find('input').attr('step').replace(/\s/g, ''):1);
		let number = Number($this_in.val().replace(/\s/g, ''));
		number = ($this.is('.p')) ? number+$this_step : number-$this_step;
		number = (number > 0) ? number : 0;
		$this_in.val(formatPrice(number)).change();
		return false;
	});

	/*подключение модалов*/
	$('.mbox').fancybox({
		autoFocus: false, hideScrollbar: false,  touch: false, hideOnOverlayClick:true,
		btnTpl: {
			smallBtn: 
			'<div data-fancybox-close class="icon-close mclose ic-b"></div>'
		},
	});
	/*Добавление класса родителю input при фокусе - для подсветки иконок*/
	$('input').on('focus', function () {
		$(this).parent().addClass('focus');
	});
	$('input').on('blur', function () {
		$(this).parent().removeClass('focus');
	});
	/*яндекс карта*/
	
   $('.show_modal_address').on('click', function(){
	   const addr = $(this).data('address');
	   getMapAddress(addr);
   });

   /*переключение отображения grid*/
   $('.crtop__grid button').on('click', function(){
		const catalog = $('.crlist');
		const view = $(this).data('view');
		$('.crtop__grid button').removeClass('active');
		$(this).addClass('active');
		if(view == 'list'){
			catalog.addClass('view-list');
		}
		else{
			catalog.removeClass('view-list');
		}
   });
   /*подсчет количества символов в textarea*/
   $('textarea').on('input', function(evt){
		const length = evt.target.value.length;
		const counter = $(this).next('.textarea-counter').find('span');
		counter.text(length);

   });
   /*Блок показывать по N штук на странице */
   $('.onpage').toShowHide({
		button: '.onpage__level',
		box: '.onpage__value',
		effect: 'slide',
		anim_speed: 300,
		close_only_button: false,
		onBefore: function(el){
			el.addClass('show');
		},
		onAfter: function(el){
			el.removeClass('show');
		}
	});
	const onpage = $('.onpage');
	onpage.find('.onpage__level span').text(onpage.find('.onpage__value .active').text());
	onpage.find('.onpage__value a').on('click',function(e){
		e.preventDefault();
		$('.onpage').trigger('click');
		onpage.find('.onpage__level span').text($(this).text());
		onpage.find('.onpage__value a').removeClass('active');
		$(this).addClass('active');
	});
	/*select*/
	$('select').select2({
		minimumResultsForSearch: -1,
		
	});
	/*Показать форму Адрес проживания */
	$('#address-check').on('change', function(){
		if ($(this).is(":checked"))
		{
			$('.pf__address-home').slideUp(200);
		}
		else{
			$('.pf__address-home').slideDown(200);
		}
	});
	/*меню в документах профиля*/
	$('.pf__docs-btns').toShowHide({
		button: '.docs-menu',
		box: 'ul',
		effect: 'fade',
		anim_speed: 200,
		close_only_button: false,
		onBefore: function(el){
			el.addClass('show');
		},
		onAfter: function(el){
			el.removeClass('show');
		}
	});
	/*открыть загрузку файла на загрузку профиле*/
	$('.download-file').on('click',function(){
		$(this).closest('.pf__docs-item').find('.input-doc-file').trigger('click');
	});
	/*табы авторизация*/
	var $cur_block = $('.mlog__block[data-id=1]');
	$('.mlog__tab a').on('click', function(){
		var $this = $(this);
		if($this.data('id') == 2){$('#mlog').addClass('mreg');}else{$('#mlog').removeClass('mreg');}
		$('.mlog__tab a').removeClass('active');
		$this.addClass('active');
		$('.mlog__block').addClass('hidden');
		$cur_block = $('.mlog__block[data-id='+$this.data('id')+']');
		$cur_block.removeClass('hidden');

		return false;
	});
	$('.mlog__v-tab a').on('click', function(){
		var $this = $(this);
		$('.mlog__v-tab a').removeClass('active');
		$this.addClass('active');
		$cur_block.find('.mlog__v-box').addClass('hidden');
		$cur_block.find('.mlog__v-box[data-id='+$this.data('id')+']').removeClass('hidden');
		return false;
	});
	/*глаз пароля*/
	$('.mlog span.icon-eye').on('click', function(){
		var $this = $(this);
		var $inp = $this.parent().find('input');
		if (!$this.is('.off'))
		{
			$inp.attr('type', 'text');
			$this.addClass('off');
		}
		else
		{
			$inp.attr('type', 'password');
			$this.removeClass('off');
		}
		return false;
	});
	/*Определение переменной для правильного отображения модальных окон на мобильных устройствах*/
	setVh();

});  
/*правильное отображение модальных окон на мобильных устройствa*/ 
$(window).on("resize orientationchange", function (event) {
	setVh();
});
/*сброс листинга при размере экрана меньше 650*/
/*скрываем header__layout при ресайзе*/
		
$(window).on("resize", function (event) {
	const widthSc = $(window).width();
	if($('.crlist').length > 0){
		
		const catalog = $('.crlist');
		let offset = 128;
		if(widthSc <= 650){
			catalog.removeClass('view-list');
		}
	}
	if(widthSc > 991){
		$('.header__layout').fadeOut(0);
	}
});
function setVh(){
	const widthSc = $(window).width();
	if(widthSc <= 450){
		const vh = $(window).innerHeight() / 100;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	}
}
 function getMapAddress(address) {
	 $('#mmap__box').html('');
		var myMap = new ymaps.Map('mmap__box', {
				center: [55.753994, 37.622093],
				zoom: 9
			}); 

			ymaps.geocode(address, {results: 1})
			.then(function (res) {
			var firstGeoObject = res.geoObjects.get(0),
				coords = firstGeoObject.geometry.getCoordinates(),
				bounds = firstGeoObject.properties.get('boundedBy'),
				marker = new ymaps.Placemark(coords, {}, {
					iconLayout: 'default#image',
					iconImageHref: '/i/icons/marker.svg',
					iconImageSize: [31, 50],
					iconImageOffset: [-15, -25],
					iconCaption: firstGeoObject.getAddressLine(),
				});
				myMap.geoObjects.add(marker);
				myMap.setBounds(bounds, {
					checkZoomRange: true
				});
		});
    }
function formatPrice(n) {
    n += "";
    n = new Array(4 - n.length % 3).join("U") + n;
    return n.replace(/([0-9U]{3})/g, "$1 ").replace(/U/g, "");
}