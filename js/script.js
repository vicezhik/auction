$(document).ready(function () {
	/*Определение переменной для правильного отображения модальных окон на мобильных устройствах*/
	setVh();
	/*меню в шапке сайта*/
	$('.hd__pmenu').toShowHide({
		button: '.hd__pmenu-l',
		box: '.hd__pmenu-box',
		effect: 'slide',
		anim_speed: 300,
		close_only_button: false,
		onBefore: function (el) {
			el.addClass('show_menu_pr_desctop');
		},
		onAfter: function (el) {
			el.removeClass('show_menu_pr_desctop');
		}
	});

	$('.header__burger').on('click', function () {
		if ($('.header').is('.show_menu_pr_mobile')) {
			if (!$('.header__layout').is("visible")) $('.header__layout').fadeIn(200);
			$('.header').removeClass('show_left');
			setTimeout(function () {
				$('.header').removeClass('show_menu_pr_mobile');
				$('.header').addClass('show_menu');
			}, 300);
		} else if ($('.header').is('.show_menu')) {
			$('.header__layout').fadeOut(200);
			$('.header').removeClass('show_menu');
		} else {
			$('.header__layout').fadeIn(200);
			$('.header').addClass('show_menu');
		}
	});
	$('.header__mobile-profile').on('click', function () {
		if ($('.header').is('.show_menu')) {
			if (!$('.header__layout').is("visible")) $('.header__layout').fadeIn(200);
			$('.header').removeClass('show_menu');
			setTimeout(function () {
				$('.header').addClass('show_menu_pr_mobile show_left');
			}, 300);
		} else if ($('.header').is('.show_menu_pr_mobile')) {
			$('.header__layout').fadeOut(200);
			$('.header').removeClass('show_left');
			setTimeout(function () {
				$('.header').removeClass('show_menu_pr_mobile');
			}, 300);
		} else {
			$('.header__layout').fadeIn(200);
			$('.header').addClass('show_menu_pr_mobile show_left');
		}
	});

	$('.header__layout').on('click', function () {
		$('.header__layout').fadeOut(200);
		$('.header').removeClass('show_menu  show_left');
		setTimeout(function () {
			$('.header').removeClass('show_menu_pr_mobile');
		}, 300);
	});
	/*фильтр мобильная*/
	$('.crtop__btn-filter').on('click', function () {
		if (!$('.cars_filter').hasClass('show')) {
			$('.cars_filter').addClass('show');
			$('body').append('<div class="crfilter__layout"></div>');
			$('.crfilter__layout').fadeIn(200);
			$('.crfilter__layout').on('click', function () {
				$(".crfilter__layout").fadeOut(300, function () {
					$(this).remove();
				});
				$('.cars_filter').removeClass('show');
			});
		} else {
			$('.cars_filter').removeClass('show');
			$(".crfilter__layout").fadeOut(300, function () {
				$(this).remove();
			});
		}
	});
	/*поиск мобильная*/
	$('.crtop__btn-search').on('click', function () {
		$('.crtop__mobile-search').addClass('show');
		$('.crtop__mobile-search input').focus();
	});
	$('.crtop__mobile-search input').on('blur', function () {
		$('.crtop__mobile-search').removeClass('show');
	});
	/*попап снизу мобильная*/
	$('[data-mbottom]').on('click', function () {
		const box = $($(this).data('mbottom'));
		if (box.length) {
			if (!box.hasClass('show')) {
				box.addClass('show');
				$('body').append('<div class="mbottom__layout"></div>');
				$('.mbottom__layout').fadeIn(200);
				$('.mbottom__layout, .mbottom-close').on('click', function () {
					$(".mbottom__layout").fadeOut(300, function () {
						$(this).remove();
					});
					$('.mbottom-mobile.show').removeClass('show');
				});
			} else {
				box.removeClass('show');
				box.fadeOut(200);
				$(".mbottom__layout").fadeOut(300, function () {
					$(this).remove();
				});
			}
		}

	});

	/*для фильтра в листинге*/

	hiddenArrow();

	function hiddenArrow() {
		const scrLeft = $('.crtop__bgs-scroll').scrollLeft();
		let blWidth = 0;
		$(".crtop__bgs-item").each(function () {
			blWidth += $(this).outerWidth();
		});
		const blScrollWidth = $('.crtop__bgs').width();
		if (scrLeft === 0) {
			$('.crtop__bgs-prev').addClass('disabled');
		} else {
			$('.crtop__bgs-prev').removeClass('disabled');
		}
		if (scrLeft + blScrollWidth >= blWidth) {
			$('.crtop__bgs-next').addClass('disabled');
		} else {
			$('.crtop__bgs-next').removeClass('disabled');
		}
	}
	$('.crtop__bgs-prev').on('click', function () {
		$('.crtop__bgs-scroll').stop(true, true).animate({
			scrollLeft: $('.crtop__bgs-scroll').scrollLeft() - 250
		}, 300, '', function () {
			hiddenArrow()
		});
	});
	$('.crtop__bgs-next').on('click', function () {
		$('.crtop__bgs-scroll').stop(true, true).animate({
			scrollLeft: $('.crtop__bgs-scroll').scrollLeft() + 250
		}, 300, '', function () {
			hiddenArrow()
		});
	});
	$('.crtop__bgs-item').on('click', function () {
		$('.crtop__bgs-item').removeClass('active');
		$(this).addClass('active');
	});
	$('.crtop__bgs-scroll').on('scroll', function () {
		hiddenArrow();
	});

	/*листание - недели*/
	setWeek();

	function setWeek() {

		const shortCalendar = $('.cars_filter_short.crcalendar');
		if (shortCalendar.length) {
			const offset = shortCalendar.find('.crc__week.active_week').position().left;
			const blDays = shortCalendar.find('.crc__days');
			blDays.scrollLeft(offset);

			$('.prev-week').on('click', function () {
				blDays.stop(true, true).animate({
					scrollLeft: blDays.scrollLeft() - blDays.width()
				}, 300);
			});
			$('.next-week').on('click', function () {
				blDays.stop(true, true).animate({
					scrollLeft: blDays.scrollLeft() + blDays.width()
				}, 300);
			});
		}

	}

	/*расширенный поиск*/
	$('.crfilter__moresearch').on('click', function () {
		const link = $(this);
		if ($(this).hasClass('active')) {
			$('.crfilter__form, .crcalendar').animate({
				opacity: 0
			}, 200, '', function () {
				$('.crfilter, .crcalendar').addClass('cars_filter_short');
				$('.crfilter__form, .crcalendar').animate({
					opacity: 1
				}, 200, '', function () {});
				link.removeClass('active');
			});
		} else {
			$('.crfilter__form, .crcalendar').animate({
				opacity: 0
			}, 200, '', function () {
				$('.crfilter, .crcalendar').removeClass('cars_filter_short');
				$('.crfilter__form, .crcalendar').animate({
					opacity: 1
				}, 200, '', function () {});
				link.addClass('active');
			});
		}


	});

	/*календарь*/
	$('.crc__week div.haslots').on('click', function () {
		$('.crc__week  div').removeClass('active');
		$(this).addClass('active');
	});

	/*слайдер изображений в листинге*/
	if ($('.critem').length) {
		$('.critem').each(function () {


			var $imgs = $(this).find('.critem__imgs');
			$imgs.HvrSlider();
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
	$('.numb a').on('click', function () {
		const $this = $(this);
		const $this_box = $this.parent();
		const $this_in = $this_box.find('input');
		const $this_step = Number(($this_box.find('input').attr('step')) ? $this_box.find('input').attr('step').replace(/\s/g, '') : 1);
		let number = Number($this_in.val().replace(/\s/g, ''));
		number = ($this.is('.p')) ? number + $this_step : number - $this_step;
		number = (number > 0) ? number : 0;
		$this_in.val(formatPrice(number)).change();
		return false;
	});

	/*подключение модалов*/
	$('.mbox').fancybox();
	/*Добавление класса родителю input при фокусе - для подсветки иконок*/
	$('input').on('focus', function () {
		$(this).parent().addClass('focus');
	});
	$('input').on('blur', function () {
		$(this).parent().removeClass('focus');
	});
	/*яндекс карта*/

	$('.show_modal_address').on('click', function () {
		const addr = $(this).data('address');
		getMapAddress(addr);
	});

	/*переключение отображения grid*/
	$('.crtop__grid button').on('click', function () {
		const catalog = $('.crlist');
		const view = $(this).data('view');
		$('.crtop__grid button').removeClass('active');
		$(this).addClass('active');
		if (view == 'list') {
			catalog.addClass('view-list');
		} else {
			catalog.removeClass('view-list');
		}
	});
	/*подсчет количества символов в textarea*/
	$('textarea').on('input', function (evt) {
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
		onBefore: function (el) {
			el.addClass('show');
		},
		onAfter: function (el) {
			el.removeClass('show');
		}
	});
	const onpage = $('.onpage');
	onpage.find('.onpage__level span').text(onpage.find('.onpage__value .active').text());
	onpage.find('.onpage__value a').on('click', function (e) {
		e.preventDefault();
		$('.onpage').trigger('click');
		onpage.find('.onpage__level span').text($(this).text());
		onpage.find('.onpage__value a').removeClass('active');
		$(this).addClass('active');
	});
	/*select*/
	$('select:not([multiple])').select2({
		minimumResultsForSearch: -1,
	});
	$('select[multiple]').select2({
		minimumResultsForSearch: -1,
		closeOnSelect : false,
		allowHtml: true,
		tags: true,
		dropdownCssClass : "select-multiple",
	});
	/*Показать форму Адрес проживания */
	$('#address-check').on('change', function () {
		if ($(this).is(":checked")) {
			$('.pf__address-home').slideUp(200);
		} else {
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
		onBefore: function (el) {
			el.addClass('show');
		},
		onAfter: function (el) {
			el.removeClass('show');
		}
	});
	/*открыть загрузку файла на загрузку профиле*/
	$('.download-file').on('click', function () {
		$(this).closest('.pf__docs-item').find('.input-doc-file').trigger('click');
	});
	/*табы авторизация*/
	var $cur_block = $('.mlog__block[data-id=1]');
	$('.mlog__tab a').on('click', function () {
		var $this = $(this);
		if ($this.data('id') == 2) {
			$('#auth_registration_modal').addClass('mreg');
		} else {
			$('#auth_registration_modal').removeClass('mreg');
		}
		$('.mlog__tab a').removeClass('active');
		$this.addClass('active');
		$('.mlog__block').addClass('hidden');
		$cur_block = $('.mlog__block[data-id=' + $this.data('id') + ']');
		$cur_block.removeClass('hidden');

		return false;
	});
	$('.mlog__v-tab a').on('click', function () {
		var $this = $(this);
		$('.mlog__v-tab a').removeClass('active');
		$this.addClass('active');
		$cur_block.find('.mlog__v-box').addClass('hidden');
		$cur_block.find('.mlog__v-box[data-id=' + $this.data('id') + ']').removeClass('hidden');
		return false;
	});
	/*глаз пароля*/
	$('.mlog span.icon-eye').on('click', function () {
		var $this = $(this);
		var $inp = $this.parent().find('input');
		if (!$this.is('.off')) {
			$inp.attr('type', 'text');
			$this.addClass('off');
		} else {
			$inp.attr('type', 'password');
			$this.removeClass('off');
		}
		return false;
	});
	/*общий скрипт табов*/
	$('[data-tab]:not(.tab-disabled)').on('click', function () {
		const $this = $(this);
		const $content_block = $this.closest('.tab-outer');
		const $cur_block = $('.tab-content' + $this.data('tab'));
		$this.closest('.tab-list').find('[data-tab]').removeClass('active');
		$this.addClass('active');
		$content_block.find('>.tab-content').removeClass('active');
		$cur_block.addClass('active');
		return false;
	});
	/*Для карточек, совмещение табов и аккордеона*/
	$('.card__tabs [data-tab]:not(.tab-disabled)').on('click', function () {
		const $this = $(this);
		const $cur_block = $('.tab-content' + $this.data('tab'));
		$cur_block.prev().trigger('click');
	});
	$('.card__tabs [data-accordeon]:not(.acc-disabled)').on('click', function () {
		$('.card__tabs > .tab-outer > .tab-list [data-tab]').removeClass('active');
		$('.card__tabs [data-tab="'+$(this).data('accordeon')+'"]').addClass('active');
	});
	/*аккордеон для комплектации - мобильная версия*/
	$('.cdt__compl-item .title').on('click', function(){
		if($(window).width() <=650){
			$(this).next('ul').toggleClass('open');
			$(this).toggleClass('open');
		}
	});
	/*скрипт для аккордеона*/
	$('[data-accordeon]').on('click', function () {
		const accordeon = $(this).closest('.accordeon-out');
		if (!$(this).hasClass('accordeon-open')) {
			accordeon.find('[data-accordeon]').removeClass('accordeon-open');
			$(this).addClass('accordeon-open');
			if(!$(this).is(":hidden")){
				accordeon.find('.accordeon-box').slideUp(300);
				accordeon.find($(this).data('accordeon')).stop(true, true).slideDown(300);
			}
			else{
				accordeon.find('.accordeon-box').hide();
				accordeon.find($(this).data('accordeon')).show();
			}
			
		} else {
			if(!$(this).is(":hidden")){
				$(this).removeClass('accordeon-open');
				accordeon.find($(this).data('accordeon')).slideUp(300);
			}
		}

	});
	/*слайдер карточка*/
	function setSliderCard() {
		widthSc = $(window).width();
		$('.cdg__big-list').slick({
			speed: 300,
			arrows: false,
			asNavFor: $('.cdg__pv-list'),
			infinite: false,
		});
		if(widthSc > 650){
			$('.cdg__pv-list').slick({
				speed: 300,
				slidesToShow: 4,
				focusOnSelect: true,
				asNavFor: $('.cdg__big-list'),
				prevArrow: '.cdg__pv-arr.l',
				nextArrow: '.cdg__pv-arr.r',
				adaptiveHeight: true,
				infinite: false,
				vertical: true,
			});
		}
		else if(widthSc < 450) {
			$('.cdg__pv-list').slick({
				speed: 300,
				slidesToShow: 3,
				focusOnSelect: true,
				asNavFor: $('.cdg__big-list'),
				prevArrow: '.cdg__pv-arr.l',
				nextArrow: '.cdg__pv-arr.r',
				adaptiveHeight: true,
				infinite: false,
				vertical: false,
			});
		}
		else{
			$('.cdg__pv-list').slick({
				speed: 300,
				slidesToShow: 4,
				focusOnSelect: true,
				asNavFor: $('.cdg__big-list'),
				prevArrow: '.cdg__pv-arr.l',
				nextArrow: '.cdg__pv-arr.r',
				adaptiveHeight: true,
				infinite: false,
				vertical: false,
			});
		}

	
	}
	setSliderCard();
	$(window).on('resize', function () {
		$('.cdg__big-list').slick('unslick');
		$('.cdg__pv-list').slick('unslick');
		setSliderCard();
		$('.cdg__big-list').slick('reinit');
	});

	/*слайдеры в табах карточка*/
	function getSettingsGalBig(pvGal){
		
		return {
			speed: 300,
			arrows: false,
			asNavFor: pvGal,
			infinite: false,
			slidesToShow: 1,
			fade: true,
		};
	}
	function getSettingsGalPv(bigGal,pvGal){
		widthSc = $(window).width();
		if(widthSc > 991){
			return {
				speed: 300,
				slidesToShow: 4,
				focusOnSelect: true,
				asNavFor: bigGal, 
				prevArrow: pvGal.parent().find('.cdtgal__pv-arr.l'),
				nextArrow: pvGal.parent().find('.cdtgal__pv-arr.r'),
				vertical: true,
				infinite: false,
			};
		}
		else{
			return {
				speed: 300,
				slidesToShow: 4,
				focusOnSelect: true,
				asNavFor: bigGal, 
				prevArrow: pvGal.parent().find('.cdtgal__pv-arr.l'),
				nextArrow: pvGal.parent().find('.cdtgal__pv-arr.r'),
				vertical: false,
				infinite: false,
			};
		}
		
	}
	$('.cdt__gallery').each(function () {
		const bigGal = $(this).find('.cdtgal__big-list');
		const pvGal = $(this).find('.cdtgal__pv-list');
		bigGal.slick(getSettingsGalBig(pvGal));
		pvGal.slick(getSettingsGalPv(bigGal, pvGal));


		$('.cdt__dopdata-tabs [data-tab], .card__tabs [data-tab=".cdt__tab5"], [data-accordeon=".cdt__tab5"]').on('click', function () {
			bigGal.slick('unslick').slick(getSettingsGalBig(pvGal)).slick('reinit');
			pvGal.slick('unslick').slick(getSettingsGalPv(bigGal, pvGal));
		});
		$(window).on('resize', function () {
			bigGal.slick('unslick').slick(getSettingsGalBig(pvGal)).slick('reinit');
			pvGal.slick('unslick').slick(getSettingsGalPv(bigGal, pvGal));
		})
	});
	/*табы-слайдеры для мобильной версии  в карточке*/
	const icleft = $('.card__tabs .cdt__dopdata-tabs .tab-list i.left');
	const icright = $('.card__tabs .cdt__dopdata-tabs .tab-list i.right');
	icright.on('click', function(){
		$curr = $(this).parent().find('.active').nextAll('button:not(.tab-disabled)').first();
		

		if($curr.length > 0){
			$curr.trigger('click');
			icleft.removeClass('disabled');
		}
		if($curr.next().is('i')){
			icright.addClass('disabled');
		}
	});
	icleft.on('click', function(){
		$curr = $(this).parent().find('.active').prevAll('button:not(.tab-disabled)').first();
		console.log($curr);
		if($curr.length > 0){
			$curr.trigger('click');
			icright.removeClass('disabled');
		}
		if($curr.prev().is('i')){
			icleft.addClass('disabled');
		}
	});


	/*tooltip для развертки авто*/
	$('path[data-text]').hover(function () {
		// Hover over code
		var title = $(this).data('text');
		$('<p class="tooltip car-state"></p>')
			.text(title)
			.appendTo('body')
			.fadeIn('slow');
	}, function () {
		// Hover out code
		$('.tooltip').remove();
	}).mousemove(function (e) {
		$('.tooltip').css('left', e.pageX);
		$('.tooltip').css('top', e.pageY);
	});

});
/*правильное отображение модальных окон на мобильных устройствa*/
$(window).on("resize orientationchange", function (event) {
	setVh();
});
/*сброс листинга при размере экрана меньше 650*/
/*скрываем header__layout при ресайзе*/

$(window).on("resize", function (event) {
	const widthSc = $(window).width();
	if ($('.crlist').length > 0) {

		const catalog = $('.crlist');
		if (widthSc <= 650) {
			catalog.removeClass('view-list');
		}
	}
	if (widthSc > 991) {
		$('.header__layout').fadeOut(0);
		$('.crfilter__layout').remove();
		$('.mbottom__layout').remove();
	}
});

function setVh() {
	const widthSc = $(window).width();
	if (widthSc <= 450) {
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

	ymaps.geocode(address, {
			results: 1
		})
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