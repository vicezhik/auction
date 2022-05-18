
document.addEventListener('DOMContentLoaded', function(){
 
    let tooltipElem;

    document.onmouseover = function(event) {

      let target = event.target;

      // если у нас есть подсказка...
      let tooltipHtml = target.dataset.tooltip;
      if (!tooltipHtml) return;

      // ...создадим элемент для подсказки

      tooltipElem = document.createElement('div');
      tooltipElem.className = 'tooltip'; 
      tooltipElem.innerHTML = tooltipHtml;
      document.body.append(tooltipElem);

      // спозиционируем его сверху от аннотируемого элемента (top-center)
      let coords = target.getBoundingClientRect();

      //let left = coords.left + (target.offsetWidth - tooltipElem.offsetWidth) ;
	  let left = coords.left + target.offsetWidth/4*3;
      if (left < 0) left = 0; // не заезжать за левый край окна

      //let top = coords.top - tooltipElem.offsetHeight - 5;
	  let top = coords.top - tooltipElem.offsetHeight/2;
      if (top < 0) { // если подсказка не помещается сверху, то отображать её снизу
        top = coords.top + target.offsetHeight + 5;
      }

      tooltipElem.style.left = left + 'px';
      tooltipElem.style.top = top + 'px';
    };

    document.onmouseout = function(e) {

      if (tooltipElem) {
        tooltipElem.remove();
        tooltipElem = null;
      }

    };
});

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


	/*input плюс минус*/
	/*$('.numb input').force_numeric_only().keyup(function(){if($(this).val().length<=0)$(this).val('1')});*/

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
		autoFocus: false, hideScrollbar: false, closeExisting: true, touch: false, 
		btnTpl: {
			smallBtn: 
			'<div data-fancybox-close class="icon-close mclose ic-b"></div>'
		},
	});
	/*Добавление класса родителю input при фокусе - для подсветки иконок*/
	$('input').focus(function () {
		$(this).parent().addClass('focus');
	});
	$('input').blur(function () {
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

});
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
					iconImageSize: [84, 99],
					iconImageOffset: [-42, -99],
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