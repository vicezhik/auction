<?
header('Content-type: text/html; charset=Utf-8');
?>
<!doctype html>
<html>
<head>
<meta charset=utf-8>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<base href="/">
<title>Главная</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="css/select2.css?<?=rand()?>" rel="stylesheet" />
<link href="css/style.css?<?=rand()?>" rel="stylesheet" />
<link href="css/adapt.css?<?=rand()?>" rel="stylesheet" />
</head>
<body>

<div class="viewport-wrapper">
<header class="header">
	
	<div class="header__top">
		<div class="wrapper">
			
			<div class="header__logo">
				<a href=""><img src="i/logo.svg" alt=""/></a>
			</div>
			<div class="header__phone">
				<a href="tel://88122201125">+7 (812) 220-11-26</a>	
			</div>
			<div class="header__mobile">
				<div class="header__mobile-login icon-login"></div>
				<div class="header__burger"><span></span></div>
				
			</div>
			<div class="header__layout"></div>
		</div>
	</div>
	<div class="header__bt">
		<div class="wrapper">
			<div class="header__menu">
				<ul>
					<li class="active"><a href="">Открытые торги</a></li>
					<li><a href="">Онлайн торги</a></li>
					<li><a href="">Экспресс торги</a></li>
					<li><a href="">Архив</a></li>
					<li><a href="">Новости</a></li>
				</ul>
			</div>
			<div class="header__profile">
				<div class="hd__profile__noauth ic-b icon-login">
					<a href="">Вход</a>
					<span>/</span>
					<a href="">Регистрация</a>
				</div>
				
			</div>
		</div>
	</div>

</header><!-- .header -->
