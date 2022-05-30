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
                        <a href=""><img src="i/logo.svg" alt="" /></a>
                    </div>
                    <div class="header__phone">
                        <a href="tel://88122201125">+7 (812) 220-11-26</a>
                    </div>
                    <div class="header__mobile">
                        <div class="header__mobile-bids icon-bid"></div>
                        <div class="header__mobile-profile icon-user-o"></div>
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
                        <div class="hd__plist">
                            <a href="" class="ic-b hd__plist-search active"><span>3</span> </a>
                            <a href="" class="ic-b hd__plist-bids"><span>10</span></a>
                            <a href="" class="ic-b hd__plist-fav"><span>2</span></a>
                        </div>

                    </div>
                    <div class="hd__pmenu">
                        <div class="hd__pmenu-l ic-a ic-b">
                            <span>Профиль</span>
                        </div>
                        <div class="hd__pmenu-box">
                            <div class="hd__pmenu-active">
                                <div class="preview">
                                    <span>K</span>

                                </div>
                                <div class="info">
                                    <p class="title">ООО КРН</p>
                                    <p class="type">Покупатель</p>
                                    <a href="" class="icon-user-set">Перейти в личный кабинет</a>
                                    <a href="" class="icon-settings link-settings"></a>
                                </div>
                            </div>
                            <div class="hd__pmenu-list">
                                <div class="hd__pmenu-item">
                                    <div class="change-profile" onclick="">
                                        <div class="preview preview-img">
                                            <img src="/i/profile-example.jpeg" alt="">
                                            <span>K</span>
                                        </div>
                                        <div class="info">
                                            <p class="title">ООО КРН</p>
                                            <p class="type">Покупатель</p>
                                        </div>
                                    </div>
                                    <a href="" class="icon-settings link-settings"></a>
                                </div>
                                <div class="hd__pmenu-item">
                                    <div class="change-profile" onclick="">
                                        <div class="preview">
                                            <span>А</span>
                                        </div>
                                        <div class="info">
                                            <p class="title">ООО Агро</p>
                                            <p class="type">Покупатель</p>
                                        </div>
                                    </div>
                                    <a href="/dsfdsf/" class="icon-settings link-settings"></a>
                                </div>
                            </div>
                            <a href="" class="btn btn-transparent icon-user-set btn-go-lk">Перейти в личный кабинет</a>
                            <a href="" class="btn btn-transparent icon-user-plus">Создать профиль</a>
                            <a href="" class="btn btn-transparent icon-exit btn-exit">Выйти из аккаунта</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- .header -->