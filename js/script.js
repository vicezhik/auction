
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
});

function formatPrice(n) {
    n += "";
    n = new Array(4 - n.length % 3).join("U") + n;
    return n.replace(/([0-9U]{3})/g, "$1 ").replace(/U/g, "");
}