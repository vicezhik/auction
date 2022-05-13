<?
header('Content-type: text/html; charset=Utf-8');
?>
<!doctype html>
<html>
<head>
<meta charset=utf-8>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>Главная</title>
<link href="css/style.css?<?=filemtime('css/style.css')?>" rel="stylesheet" />
<link href="css/adapt.css?<?=filemtime('css/adapt.css')?>" rel="stylesheet" />
</head>
<body>

<div class="viewport-wrapper">

<header class="header">
	
	<div class="header__annt">
		
		<div class="wrapper">
			Вебинар <a href="">«Как начать швейный путь и не разочароваться»</a> уже сегодня в 18.00 ПО МСК!  Регистрируйся по <a href="">ссылке</a> прямо сейчас!
		</div>

	</div>

	<div class="wrapper">

		<div class="header__top">
			
			<div class="header__logo">
				<a href=""><img src="i/logo.svg" alt=""/></a>
			</div>

			<div class="header__soc">
				<a href="" target=_blank><span class="icon-ig"></span></a>
				<a href="" target=_blank><span class="icon-vk"></span></a>
				<a href="" target=_blank><span class="icon-yt"></span></a>
				<a href="" target=_blank><span class="icon-pt"></span></a>
				<a href="" target=_blank><span class="icon-fb"></span></a>
				<a href="" target=_blank><span class="icon-ok"></span></a>
			</div>

			<div class="header__lnks">
				<ul>
					<li>
						<a href="" class="ic-a">Курсы шитья в …</a>
						<ul>
							<li><a href="">Курсы шитья в СПб</a></li>
							<li><a href="">Курсы шитья в Москве</a></li>
						</ul>
					</li>
					<li class="bull"></li>
					<li><a href="">Онлайн-школа</a></li>
					<li class="bull"></li>
					<li><a href="">Выкройки</a></li>
					<li class="bull"></li>
					<li><a href="">Полезности</a></li>
				</ul>
			</div>

		</div>

		<div class="header__mid">
			
			<div class="header__burger"><span></span></div>

			<div class="header__text">Онлайн-школа шитья <br/>«Хочу Шить»</div>

			<div class="header__phone">
				<a href="tel://89006259719" class="ic-a"><span>8 (900) 625-97-19</span></a>
				<span>Ежедневно с 10:00 до 20:00. Звоните!</span>
			</div>

			<div class="header__bt">
				<a href=""><span>Задать вопрос</span></a>
			</div>

		</div>

		<div class="header__menu">
			<ul>
				<li class="active"><a href="">Главная</a></li>
				<li><a href="">Курсы</a></li>
				<li><a href="">Расписание</a></li>
				<li><a href=""><span>Бесплатно</span></a></li>
				<li><a href="">Отзывы</a></li>
				<li><a href="">Вопрос-ответ</a></li>
				<li><a href="">Работы учеников</a></li>
				<li><a href="">ВЕБИНАРЫ</a></li>
			</ul>
		</div>

	</div>

	<div class="header__mm">
		<ul>
			<li>
				<a href="" class="ic-a">Курсы шитья в СПб</a>
				<ul>
					<li><a href="">Пункт 1</a></li>
					<li><a href="">Пункт 2</a></li>
					<li><a href="">Пункт 3</a></li>
					<li><a href="">Пункт 4</a></li>
					<li><a href="">Пункт 5</a></li>
				</ul>
			</li>
			<li>
				<a href="" class="ic-a">Курсы шитья в Москве</a>
				<ul>
					<li><a href="">Пункт 1</a></li>
					<li><a href="">Пункт 2</a></li>
					<li><a href="">Пункт 3</a></li>
					<li><a href="">Пункт 4</a></li>
					<li><a href="">Пункт 5</a></li>
				</ul>
			</li>
			<li class="show">
				<a href="" class="ic-a">Онлайн-школа</a>
				<ul style="display: block;">
					<li><a href="">Главная</a></li>
					<li><a href="">Курсы</a></li>
					<li><a href="">Расписание</a></li>
					<li class="free"><a href=""><span>Бесплатно</span></a></li>
					<li><a href="">Отзывы</a></li>
					<li><a href="">Вопрос-ответ</a></li>
					<li><a href="">Работы учеников</a></li>
					<li><a href="">Вебинары</a></li>
				</ul>
			</li>
			<li><a href="">Выкройки</a></li>
			<li><a href="">Полезности</a></li>
		</ul>
	</div>

</header><!-- .header -->
