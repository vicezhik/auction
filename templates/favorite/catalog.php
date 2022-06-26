<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head_auth.php';
?>
<div class="cars cars__favorite">
    <div class="wrapper">

        <div class="cars_title">
            <div class="cars_title-h1">
                <h1>В избранном <span class="color-green">5296</span> автомобилей</h1>
            </div>

            <div class="cars__search ">
                <div class="ic-input icon-search"><input type="text" placeholder="Поиск по VIN или №лота ..." /></div>
            </div>
            <div class="cars__mylots-btn "><a class="btn btn-green icon-bid-active">Мои лоты</a></div>
        </div>
        <div class="crtop">

            <div class="crtop__sort">
                <div class="active asc"> Цена <span class="icon-arrow-long"></span></div>
                <div class="desc">Год выпуска <span class="icon-arrow-long"></span></div>
                <div class="desc">Пробег <span class="icon-arrow-long"></span></div>

                <div class="crtop__sort-nds">
                    <div class="form_radio">
                        <input type="radio" id="n1" value="n1" name="sort-nds" checked>
                        <label for="n1">ВСЕ</label>
                    </div>
                    <div class="form_radio">
                        <input type="radio" id="n2" value="n2" name="sort-nds">
                        <label for="n2">С НДС</label>
                    </div>
                    <div class="form_radio">
                        <input type="radio" id="n3" value="n3" name="sort-nds">
                        <label for="n3">БЕЗ НДС</label>
                    </div>
                </div>
            </div>
            <div class="crtop__mobile-search icon-search ic-input"><input type="text" placeholder="Поиск по №лота ...">
            </div>
            <div class="crtop__sort-mob ">
                <div class="crtop__sort-mob-val ic-a" data-mbottom="#msort-mobile">
                    <span>Показать лоты сначала дешевле</span>
                </div>
                <div class="crtop__sort-mob-box mbottom-mobile" id="msort-mobile">
                    <div class="cts__form-title">Показать лоты </div>
                    <div class="cts__form">
                        <div class="cts__form-item">
                            <div class="cts__form-lvl">по стоимости</div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s1" value="s1" data-value="Показать лоты сначала дороже"
                                    name="mobile-sort">
                                <label for="s1">По возрастанию</label>
                            </div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s2" value="s2" checked
                                    data-value="Показать лоты сначала дешевле" name="mobile-sort">
                                <label for="s2">По уменьшению</label>
                            </div>
                        </div>
                        <div class="cts__form-item">
                            <div class="cts__form-lvl">по пробегу</div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s4" value="s4" data-value="Показать лоты сначала меньше пробег"
                                    name="mobile-sort">
                                <label for="s4">По возрастанию</label>
                            </div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s5" value="s5" data-value="Показать лоты сначала больше пробег"
                                    name="mobile-sort">
                                <label for="s5">По уменьшению</label>
                            </div>
                        </div>
                        <div class="cts__form-item">
                            <div class="cts__form-lvl">по году выпуска</div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s6" value="s6" data-value="Показать лоты по году: новее"
                                    name="mobile-sort">
                                <label for="s6">По возрастанию</label>
                            </div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s7" value="s7" data-value="Показать лоты по году: старше"
                                    name="mobile-sort">
                                <label for="s7">По уменьшению</label>
                            </div>
                        </div>
                        <div class="cts__form-item cts__form-item-nds">
                            <div class="cts__form-lvl">по налогообложению</div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="n4" value="n4" checked
                                    data-value="Показать лоты по налогообложению: все" name="mobile-nds">
                                <label for="n4">Показывать все</label>
                            </div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="n5" value="n5"
                                    data-value="Показать лоты по налогообложению: с НДС" name="mobile-nds">
                                <label for="n5">С НДС</label>
                            </div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="n6" value="n6"
                                    data-value="Показать лоты по налогообложению: без НДС" name="mobile-nds">
                                <label for="n6">БЕЗ НДС</label>
                            </div>
                        </div>
                        <div class="cts__form-bt"><button class="btn btn-green ">Применить</button></div>
                    </div>
                    <div class="cts__form-close mbottom-close icon-close"></div>
                </div>
            </div>


            <div class="crtop__grid">
                <button class="crtop__grid-grid icon-grid active" data-view="grid"></button>
                <span class="delim"></span>
                <button class="crtop__grid-list icon-list" data-view="list"></button>
            </div>

        </div>
        <div class="crlist">

            <!--Карточки Продавец -->

            <div class="critem critem-auth ">
                <div class="critem__top">
                    <a class="critem__top-comment icon-comment" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>
                    <div class="critem__i-fav">
                        <a href="#" class="icon-star active"></a>
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
                    <div class="critem__info-time">
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Начало
                            </span>
                            <span>01.02.2022 10:00</span>
                        </div>
                        <div class="critem__info-timedel"></div>
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Окончание
                            </span>
                            <span>01.02.2022 15:00</span>
                        </div>
                    </div>
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>

                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                            Стартовая цена
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                </div>
            </div>
            <div class="critem critem-auth">
                <div class="critem__top">
                    <div class="critem__tags card-tags-box">
                        <span class="tag-nds"> Без НДС</span>
                        <span class="tag-car"> Только на RRT </span>
                        <span class="tag-delivery"> Бесплатная доставка </span>
                    </div>
                    <a class="critem__top-comment icon-comment" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>
                    <div class="critem__i-bid">
                        <span class="icon-bid"></span>
                    </div>
                    <div class="critem__i-fav">
                        <a href="#" class="icon-star"></a>
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
                    <div class="critem__info-time">
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Начало
                            </span>
                            <span>01.02.2022 10:00</span>
                        </div>
                        <div class="critem__info-timedel"></div>
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Окончание
                            </span>
                            <span>01.02.2022 15:00</span>
                        </div>
                    </div>
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>

                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                            Стартовая цена
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                </div>
            </div>
            <div class="critem critem-auth">
                <div class="critem__top">
                    <div class="critem__tags card-tags-box">
                        <span class="tag-nds"> Без НДС</span>
                        <span class="tag-car"> Только на RRT </span>
                        <span class="tag-delivery"> Бесплатная доставка </span>
                    </div>
                    <a class="critem__top-comment icon-comment" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>
                    <div class="critem__i-fav">
                        <a href="#" class="icon-star active"></a>
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
                    <div class="critem__info-time">
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Начало
                            </span>
                            <span>01.02.2022 10:00</span>
                        </div>
                        <div class="critem__info-timedel"></div>
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Окончание
                            </span>
                            <span>01.02.2022 15:00</span>
                        </div>
                    </div>
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>

                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                            Стартовая цена
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                </div>
            </div>
            <div class="critem critem-auth">
                <div class="critem__top">
                    <a class="critem__top-comment icon-comment" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>
                    <div class="critem__i-bid">
                        <span class="icon-bid"></span>
                    </div>
                    <div class="critem__i-fav">
                        <a href="#" class="icon-star"></a>
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
                    <div class="critem__info-time">
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Начало
                            </span>
                            <span>01.02.2022 10:00</span>
                        </div>
                        <div class="critem__info-timedel"></div>
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Окончание
                            </span>
                            <span>01.02.2022 15:00</span>
                        </div>
                    </div>
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>

                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                            Стартовая цена
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                </div>

            </div>
            <!--Покупатель -->
            <div class="critem critem-auth critem-buyer">
                <div class="critem__top">
                    <div class="critem__tags card-tags-box">
                        <span class="tag-nds"> Без НДС</span>
                        <span class="tag-car"> Только на RRT </span>

                    </div>
                    <a class="critem__top-comment icon-comment" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>
                    <div class="critem__i-bid">
                        <span class="icon-bid"></span>
                    </div>
                    <div class="critem__i-fav">
                        <a href="#" class="icon-star"></a>
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
                    <div class="critem__info-time">
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Начало
                            </span>
                            <span>01.02.2022 10:00</span>
                        </div>
                        <div class="critem__info-timedel"></div>
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Окончание
                            </span>
                            <span>01.02.2022 15:00</span>
                        </div>
                    </div>
                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                            Стартовая цена
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>
                    <div class="critem__info-minprice icon-tag text-icon">
                        Минимальная цена не достигнута
                    </div>

                    <div class="critem__info-bidinput ">
                        <span class="critem__info-sub">
                            Сделать ставку
                        </span>
                        <div class="group-input">
                            <div class="input__num numb">
                                <a href="" class="m"></a>
                                <input type="text" value="3 500 000" name="count" step="15000">
                                <a href="" class="p"></a>
                            </div>
                            <button class="btn btn-green icon-bid"></button>
                        </div>
                    </div>
                    <div class="critem__info-bidinput ">
                        <span class="critem__info-sub">
                            Автоставка
                        </span>
                        <div class="group-input">
                            <div class="input__num numb">
                                <a href="" class="m"></a>
                                <input type="text" value="3 500 000" name="count" step="15000">
                                <a href="" class="p"></a>
                            </div>
                            <button class="btn btn-white icon-bid-auto"></button>
                        </div>
                    </div>
                    <div class="critem__info-buynow">
                        <button class="btn btn-green">Купить сейчас 4 000 000</button>

                    </div>
                </div>
            </div>
            <div class="critem critem-auth critem-buyer">
                <div class="critem__top">
                    <a class="critem__top-comment icon-comment" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>
                    <div class="critem__i-bid">
                        <span class="icon-bid"></span>
                    </div>
                    <div class="critem__i-fav">
                        <a href="#" class="icon-star active"></a>
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
                    <div class="critem__info-time">
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Начало
                            </span>
                            <span>01.02.2022 10:00</span>
                        </div>
                        <div class="critem__info-timedel"></div>
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Окончание
                            </span>
                            <span>01.02.2022 15:00</span>
                        </div>
                    </div>
                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub">
                            Текущая ставка
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>
                    <div class="critem__info-minprice icon-tag text-icon">
                        Минимальная цена не достигнута
                    </div>

                    <div class="critem__info-bidinput ">
                        <span class="critem__info-sub">
                            Сделать ставку
                        </span>
                        <div class="group-input">
                            <div class="input__num numb">
                                <a href="" class="m"></a>
                                <input type="text" value="3 500 000" name="count" step="15000">
                                <a href="" class="p"></a>
                            </div>
                            <button class="btn btn-green icon-bid"></button>
                        </div>
                    </div>
                    <div class="critem__info-bidinput ">
                        <span class="critem__info-sub">
                            Автоставка
                        </span>
                        <div class="group-input">
                            <div class="input__num numb">
                                <a href="" class="m"></a>
                                <input type="text" value="3 500 000" name="count" step="15000">
                                <a href="" class="p"></a>
                            </div>
                            <button class="btn btn-white icon-bid-auto"></button>
                        </div>
                    </div>
                    <div class="critem__info-buynow">
                        <button class="btn btn-green">Купить сейчас 4 000 000</button>

                    </div>
                </div>
            </div>
            <div class="critem critem-auth critem-buyer">
                <div class="critem__top">
                    <div class="critem__tags card-tags-box">

                        <span class="tag-delivery"> Бесплатная доставка </span>
                    </div>
                    <a class="critem__top-comment icon-comment" href=""></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>
                    <div class="critem__i-bid">
                        <span class="icon-bid"></span>
                    </div>
                    <div class="critem__i-fav">
                        <a href="#" class="icon-star"></a>
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
                    <div class="critem__info-time">
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Начало
                            </span>
                            <span>01.02.2022 10:00</span>
                        </div>
                        <div class="critem__info-timedel"></div>
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Окончание
                            </span>
                            <span>01.02.2022 15:00</span>
                        </div>
                    </div>
                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub bid-more">
                            Ваша ставка лидирует
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>
                    <div class="critem__info-minprice icon-tag text-icon">
                        Минимальная цена не достигнута
                    </div>

                    <div class="critem__info-bidinput ">
                        <span class="critem__info-sub">
                            Сделать ставку
                        </span>
                        <div class="group-input">
                            <div class="input__num numb">
                                <a href="" class="m"></a>
                                <input type="text" value="3 500 000" name="count" step="15000">
                                <a href="" class="p"></a>
                            </div>
                            <button class="btn btn-green icon-bid"></button>
                        </div>
                    </div>
                    <div class="critem__info-bidinput ">
                        <span class="critem__info-sub">
                            Автоставка
                        </span>
                        <div class="group-input">
                            <div class="input__num numb">
                                <a href="" class="m"></a>
                                <input type="text" value="3 500 000" name="count" step="15000">
                                <a href="" class="p"></a>
                            </div>
                            <button class="btn btn-white icon-bid-auto"></button>
                        </div>
                    </div>
                    <div class="critem__info-buynow">
                        <button class="btn btn-green">Купить сейчас 4 000 000</button>

                    </div>
                </div>
            </div>
            <div class="critem critem-auth critem-buyer">
                <div class="critem__top">
                    <div class="critem__tags card-tags-box">
                        <span class="tag-nds"> Без НДС</span>
                        <span class="tag-car"> Только на RRT </span>
                        <span class="tag-delivery"> Бесплатная доставка </span>
                    </div>
                    <a class="critem__top-comment icon-comment mbox" href="#mcomment"></a>
                    <div class="critem__imgs">

                        <div class="critem__imgs-list">
                            <img src="/i/cars/car1.jpg" alt="">
                            <img src="/i/cars/car2.jpg" alt="">
                            <img src="/i/cars/car1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="critem__i">
                    <div class="critem__i-num">
                        <span>№ 877865</span>
                    </div>
                    <div class="critem__i-type">
                        <span>Открытые торги</span>
                    </div>
                    <div class="critem__i-bid">
                        <span class="icon-bid"></span>
                    </div>
                    <div class="critem__i-fav">
                        <a href="#" class="icon-star active  mbox" data-src="#mfav"></a>
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
                        <a href="#mvin" class="vin-n mbox">X4XKS494900X76310</a>
                        <span class="icon-vin icon-vin-success"></span>
                    </div>
                    <div class="critem__info-km icon-speed text-icon">
                        78 000 км
                    </div>
                    <div class="critem__info-map icon-map text-icon">
                        <a href="#mmap" data-address="Псков Псков, Рижский проспект, 1008"
                            class="show_modal_address mbox">Санкт-Петербург</a>
                    </div>
                    <div class="critem__info-delivery icon-delivery text-icon">
                        <a href="#mdelivery" class="mbox">Доставка</a>
                    </div>
                    <div class="critem__info-time">
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Начало
                            </span>
                            <span>01.02.2022 10:00</span>
                        </div>
                        <div class="critem__info-timedel"></div>
                        <div class="critem__info-timeitem">
                            <span class="critem__info-sub">
                                Окончание
                            </span>
                            <span>01.02.2022 15:00</span>
                        </div>
                    </div>
                    <div class="critem__info-price-bl">
                        <span class="critem__info-sub bid-smaller">
                            Ваша ставка перебита
                        </span>
                        <span class="critem__info-price"> <span>3 800 000</span>₽</span>
                    </div>
                    <div class="critem__info-bid icon-bid-active text-icon">
                        Шаг аукциона: 15 000 ₽
                    </div>
                    <div class="critem__info-minprice icon-tag text-icon">
                        Минимальная цена не достигнута
                    </div>

                    <div class="critem__info-bidinput ">
                        <span class="critem__info-sub">
                            Сделать ставку
                        </span>
                        <div class="group-input">
                            <div class="input__num numb">
                                <a href="" class="m"></a>
                                <input type="text" value="3 500 000" name="count" step="15000">
                                <a href="" class="p"></a>
                            </div>
                            <button class="btn btn-green icon-bid mbox" data-src="#mbidadd"></button>
                        </div>
                    </div>
                    <div class="critem__info-bidinput ">
                        <span class="critem__info-sub">
                            Автоставка
                        </span>
                        <div class="group-input">
                            <div class="input__num numb">
                                <a href="" class="m"></a>
                                <input type="text" value="3 500 000" name="count" step="15000">
                                <a href="" class="p"></a>
                            </div>
                            <button class="btn btn-white icon-bid-auto mbox" data-src="#mbidaddauto"></button>
                        </div>
                    </div>
                    <div class="critem__info-buynow">
                        <button class="btn btn-green">Купить сейчас 4 000 000</button>

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
                    <a href="#">Показывать по 60 на странице</a>
                    <a href="#">Показывать по 100 на странице</a>
                    <a href="#">Показывать все лоты</a>
                </div>
            </div>

        </div>
    </div>

</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>