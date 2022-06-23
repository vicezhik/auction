<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head_auth.php';
?>
<div class="cars cars__mylots">
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li><a href=""><span class="icon-home"></span>Главная</a></li>
            <li><span>Мои ставки на аукционах</span></li>
        </ul>
        <div class="cars_title">
            <div class="cars_title-h1">
                 <h1>Мои ставки на аукционах</h1>
            </div>
        </div>
        

        <div class="crtop crtop__seller">
            <div  class="crtop__addlot-btn "><a class="btn btn-green icon-bid-active">Добавить лот</a></div>
            <div class="crtop__bgs crtop__bgs-mylots  crtop__bgs-select">
            
                     <div class="crtop__bgs-prev disabled"><i class="icon-arrow-dl "></i></div>
                <div class="crtop__bgs-scroll ">
                    <div class="crtop__bgs-select-title">Все лоты</div>
                    <div class="crtop__bgs-list crtop__bgs-list-mylots">
                        <div class="crtop__bgs-item active">
                            Все лоты
                        </div>
                        <div class="crtop__bgs-item title-desc">
                            На тограх
                        </div>
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Все</span>
                            <span class="title-mob">На тограх (Все)</span>
                        </div>
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Есть ставки</span>
                            <span class="title-mob">На тограх (Есть ставки)</span>
                        </div>
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Нет ставок</span>
                            <span class="title-mob">На тограх (Нет ставок)</span>
                        </div>
                        <div class="crtop__bgs-item">
                            На модерации
                        </div>
                        <div class="crtop__bgs-item">
                            Черновики
                        </div>
                        <div class="crtop__bgs-item title-desc">
                            Завершенные
                        </div> 
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Все</span>
                            <span class="title-mob">Завершенные (Все)</span>
                        </div>
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Разыгранные</span>
                            <span class="title-mob">Завершенные (Разыгранные)</span>
                        </div>
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Не разыгранные</span>
                            <span class="title-mob">Завершенные (Не разыгранные)</span>
                        </div>
                    </div>
                </div>
                <div class="crtop__bgs-next disabled"><i class="icon-arrow-dr"></i></div>
          
               
            </div>
            <div class="crtop__delim"></div>

            <div class="crtop__search "><div class="ic-input icon-search"><input type="text" placeholder="Поиск по VIN или №лота ..."/></div></div>
            <div class="crtop__grid">
                <button class="crtop__grid-grid icon-grid active" data-view="grid"></button>
                <span class="delim"></span>
                <button class="crtop__grid-list icon-list" data-view="list"></button>
            </div>

        </div>
        <div class="crlist crlist-mylots crlist-mylots-seller">

            <div class="critem critem-auth critem-noactivate">
                <div class="critem__top">
                    <a class="critem__top-bidsall icon-bids-all" href=""></a>
                    <div class="critem__imgs">
                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                    <div class="ml-status draft">Черновик</div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>
                    <div class="critem__i-edit">
                        <a href="#" class="icon-edit"></a>
                    </div>
                    <div class="critem__i-del">
                        <a href="#" class="icon-delete"></a>
                    </div>
                </div>
                <div class="critem__info">
                    <div class="critem__info-model">
                        <a href="#">Mercedes-Benz GLE-класс Coupe</a>
                    </div>
                    <div class="critem__info-modif">
                        30d 3.0d AT (249 л.с.) 4WD 2018 г.
                    </div>
                    <div class="critem__info-vin">
                        <span class="vin-t">VIN</span>
                        <a href="" class="vin-n"> X4XKS494900X76310</a>
                        <span class="icon-vin icon-vin-success"></span>
                    </div>
                    <div class="critem__info-km icon-speed text-icon">
                        78 000 км
                    </div>
                    <div class="critem__info-map icon-map text-icon">
                        <a href="#">Александровск-Сахалинск</a>
                    </div>
                    <div class="critem__info-delivery icon-delivery text-icon">
                        <a href="#">Доставка</a>
                    </div>
                    <div class="critem__info-bid icon-bid-active text-icon text-icon-red">
                        Шаг аукциона: не задан
                    </div>

                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                            Стартовая цена
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                    <div class="critem__info-btn-seller">
                        <button class="btn btn-green">Отправить на модерацию</button>
                    </div>
                </div>
            </div>
            <div class="critem critem-auth critem-noactivate">
                <div class="critem__top">
                     <div class="critem__tags card-tags-box">
                        <span class="tag-nds"> Без НДС</span>
                        <span class="tag-car"> Только на RRT </span>
                        <span class="tag-delivery"> Бесплатная доставка </span>
                    </div>
                    <a class="critem__top-bidsall icon-bids-all" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>

                    </div>
                    <div class="ml-status moderation">На модерации</div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>

                </div>
                <div class="critem__info">
                    <div class="critem__info-model">
                        <a href="#">Mercedes-Benz GLE-класс Coupe</a>
                    </div>
                    <div class="critem__info-modif">
                        30d 3.0d AT (249 л.с.) 4WD 2018 г.
                    </div>
                    <div class="critem__info-vin">
                        <span class="vin-t">VIN</span>
                        <a href="" class="vin-n">X4XKS494900X76310</a>
                        <span class="icon-vin icon-vin-success"></span>
                    </div>
                    <div class="critem__info-km icon-speed text-icon">
                        78 000 км
                    </div>
                    <div class="critem__info-map icon-map text-icon">
                        <a href="#">Санкт-Петербург</a>
                    </div>
                    <div class="critem__info-delivery icon-delivery text-icon">
                        <a href="#">Доставка</a>
                    </div>
                   
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>
  
                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                        Cтартовая цена           
                        </span>
                        <span class="critem__info-price"><span>3 800 000</span>₽</span>
                    </div>
                    <div class="critem__info-btn-seller">
                        <button class="btn btn-white">Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="critem critem-auth critem-activate">
                <div class="critem__top">
                     <div class="critem__tags card-tags-box">
                        <span class="tag-nds"> Без НДС</span>
                        <span class="tag-car"> Только на RRT </span>
                        <span class="tag-delivery"> Бесплатная доставка </span>
                    </div>
                    <a class="critem__top-bidsall icon-bids-all" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                    <div class="ml-status gobids2">Идут торги</div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>

                </div>
                <div class="critem__info">
                    <div class="critem__info-model">
                        <a href="#">Mercedes-Benz GLE-класс Coupe</a>
                    </div>
                    <div class="critem__info-modif">
                        30d 3.0d AT (249 л.с.) 4WD 2018 г.
                    </div>
                    <div class="critem__info-vin">
                        <span class="vin-t">VIN</span>
                        <a href="" class="vin-n">X4XKS494900X76310</a>
                        <span class="icon-vin icon-vin-success"></span>
                    </div>
                    <div class="critem__info-km icon-speed text-icon">
                        78 000 км
                    </div>
                    <div class="critem__info-map icon-map text-icon">
                        <a href="#">Санкт-Петербург</a>
                    </div>
                    <div class="critem__info-delivery icon-delivery text-icon">
                        <a href="#">Доставка</a>
                    </div>
                    
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>
                    <div class="critem__info-minprice icon-tag text-icon">
                        Минимальная цена не достигнута
                    </div>
                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                        Текущая ставка            
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                    <div class="critem__info-btn-seller">
                        <button class="btn btn-green">Снять с торгов</button>
                    </div>
                </div>
            </div>
            <div class="critem critem-auth critem-activate">
                <div class="critem__top">
                    <a class="critem__top-bidsall icon-bids-all" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                    <div class="ml-status stopbids">Торги завершены</div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>

                </div>
                <div class="critem__info">
                    <div class="critem__info-model">
                        <a href="#">Mercedes-Benz GLE-класс Coupe</a>
                    </div>
                    <div class="critem__info-modif">
                        30d 3.0d AT (249 л.с.) 4WD 2018 г.
                    </div>
                    <div class="critem__info-vin">
                        <span class="vin-t">VIN</span>
                        <a href="" class="vin-n">X4************310</a>
                        <span class="icon-vin icon-vin-success"></span>
                    </div>
                    <div class="critem__info-km icon-speed text-icon">
                        78 000 км
                    </div>
                    <div class="critem__info-map icon-map text-icon">
                        <a href="#">Санкт-Петербург</a>
                    </div>
                    <div class="critem__info-delivery icon-delivery text-icon">
                        <a href="#">Доставка</a>
                    </div>
                   
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>
                    <div class="critem__info-minprice minprice-success icon-tag text-icon">
                        Минимальная цена достигнута
                    </div>
                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                        Победившая ставка 
                        </span>
                        <span class="critem__info-price"> <i class="icon-win"></i> <span>3 800 000</span>₽</span>
                    </div>
                    <div class="critem__info-btn-seller ">
                        <button class="btn btn-white btn-border-green icon-bid-active">Лот разыгран</button>
                    </div>
                </div>
            </div>
            <div class="critem critem-auth critem-activate">
                <div class="critem__top">
                    <a class="critem__top-bidsall icon-bids-all" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                    <div class="ml-status stopbids">Торги завершены</div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>

                </div>
                <div class="critem__info">
                    <div class="critem__info-model">
                        <a href="#">Mercedes-Benz GLE-класс Coupe</a>
                    </div>
                    <div class="critem__info-modif">
                        30d 3.0d AT (249 л.с.) 4WD 2018 г.
                    </div>
                    <div class="critem__info-vin">
                        <span class="vin-t">VIN</span>
                        <a href="" class="vin-n">X4************310</a>
                        <span class="icon-vin icon-vin-success"></span>
                    </div>
                    <div class="critem__info-km icon-speed text-icon">
                        78 000 км
                    </div>
                    <div class="critem__info-map icon-map text-icon">
                        <a href="#">Санкт-Петербург</a>
                    </div>
                    <div class="critem__info-delivery icon-delivery text-icon">
                        <a href="#">Доставка</a>
                    </div>
                   
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>
                    <div class="critem__info-minprice icon-tag text-icon">
                        Минимальная цена не достигнута
                    </div>
                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                        Последняя ставка
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                    <div class="critem__info-btn-seller ">
                        <button class="btn btn-white btn-border-red icon-bid-active">Лот не разыгран</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="crbot">
            <div class="pages">
                <ul>
                    <li class="page-item"><a class="page-link icon-prev" href="#"></a></li>
                    <li class="active page-item"><a href="" class=" page-link">1</a></li>
                    <li class="page-item"><a class="page-link " href="#">2</a></li>
                    <li class="page-item"><a class="page-link " href="#">3</a></li>
                    <li class="page-item delim"></li>
                    <li class="page-item"><a class="page-link " href="#">10</a></li>
                    <li class="page-item"><a class="page-link icon-next" href="#"></a></li>
                </ul>
            </div>
            <div class="onpage">
                <div class="onpage__level ic-a">
                    <span>Показывать по 12 на странице</span>
                </div>
                <div class="onpage__value">
                    <a href="#" class="active">Показывать по 12 на странице</a>
                    <a href="#">Показывать по 20 на странице</a>
                    <a href="#" >Показывать по 60 на странице</a>
                    <a href="#" >Показывать по 100 на странице</a>
                    <a href="#" >Показывать все лоты</a>
                </div>
            </div>

        </div>


    </div>

</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>