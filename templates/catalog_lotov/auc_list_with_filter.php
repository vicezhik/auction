<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head_auth.php';
?>
<div class="cars">
    <div class="wrapper">
       
        <div class="cars_title">
            <div class="cars_title-h1">
                 <div class="cars_mobile-title">Открытые торги</div>
                 <h1>Сейчас на торгах <span class="color-green">296</span> автомобилей</h1>
            </div>
            
            <div class="cars__search "><div class="ic-input icon-search"><input type="text" placeholder="Поиск по VIN или №лота ..."/></div></div>
            <div  class="cars__mylots-btn "><a class="btn btn-green icon-bid-active">Мои лоты</a></div>
        </div>
        <div class="cars_filter tab-outer">
            <div class="crtab__mobile tab-list">
                <button class="crtab__mobile-filter icon-filter btn active" data-tab=".crfilter">Фильтр</button>
                <span class="delim"></span>
                <button class="crtab__mobile-clnd icon-calendar btn" data-tab=".crcalendar">Календарь</button>
            </div>
            <div class="crcalendar cars_filter_short tab-content">
       
                <div class="crc__month">
                    <div class="crc__title">
                        <button class="icon-left-bold prev-month"></button><span>Февраль’22</span><button class="icon-left-bold next-month"> </button>
                    </div>
                    <div class="crc__dopnav">
                        <button class="icon-left-bold prev-week"></button><button class="icon-left-bold next-week"> </button>
                    </div>
                    <div class="crc__daysofweek">
                        <div>ПН </div>
                        <div>ВТ </div>
                        <div>СР </div>
                        <div>ЧТ </div>
                        <div>ПТ </div>
                        <div class="weekend">СБ </div>
                        <div class="weekend">ВС </div>
                    </div>
                    
                    <div class="crc__days">
                        <div class="crc__week">
                            <div class="disabled">31 </div>
                            <div><span>1 </span></div>
                            <div><span>2 </span></div>
                            <div><span>3 </span></div>
                            <div class="haslots"><span>4 </span></div>
                            <div class="weekend"><span>5 </span></div>
                            <div class="weekend"><span>6 </span></div>
                        </div>
                        <div class="crc__week active_week">
                            <div><span>7 </span></div>
                            <div><span>8 </span></div>
                            <div class="active"><span> 9 </span></div>
                            <div><span>10 </span></div>
                            <div><span>11 </span></div>
                            <div class="weekend"><span>12 </span></div>
                            <div class="weekend haslots"><span>13 </span></div>
                        </div>
                        <div class="crc__week">
                            <div><span>14 </span></div>
                            <div><span>15 </span></div>
                            <div><span>16 </span></div>
                            <div><span>17 </span></div>
                            <div><span>18 </span></div>
                            <div class="weekend"><span>19 </span></div>
                            <div class="weekend"><span>20 </span></div>
                        </div>
                        <div class="crc__week">
                            <div><span>21 </span></div>
                            <div><span>22 </span></div>
                            <div><span>23 </span></div>
                            <div><span>24 </span></div>
                            <div><span>25 </span></div>
                            <div class="weekend"><span>26 </span></div>
                            <div class="weekend"><span>27 </span></div>
                        </div>
                        <div class="crc__week">
                            <div><span>28 </span></div>
                            <div class="disabled"><span>1 </span></div>
                            <div class="disabled"><span>2 </span></div>
                            <div class="disabled"><span>3 </span></div>
                            <div class="disabled"><span>4 </span></div>
                            <div class="disabled weekend"><span>5 </span></div>
                            <div class="disabled weekend"><span>6 </span></div>
                        </div>
                        <div class="crc__week">
                            <div class="disabled"><span>7 </span></div>
                            <div class="disabled"><span>8 </span></div>
                            <div class="disabled"><span>9 </span></div>
                            <div class="disabled"><span>10 </span></div>
                            <div class="disabled"><span>11 </span></div>
                            <div class="disabled weekend"><span>12 </span></div>
                            <div class="disabled weekend"><span>13 </span></div>
                        </div>
                    </div>
                    
                  
                </div>  <div class="crc__info">
                        <div class="crc__date">9 февраля</div>
                        <ul>
                            <li class="active"><span>276</span> авто на открытых торгах</li>
                            <li><span>34</span> авто на закрытых торгах</li>
                            <li><span>12</span> авто на экспресс торгах</li>
                        </ul>
                    </div>

            </div>

        
            <div class="crfilter cars_filter_short tab-content active">
                <div class="crfilter__top">
                    <p>Найдено 296 авто<span>мобилей</span></p>
                    <a href="" class="btn btn-transparent icon-star-list btn-save-search">Сохранить&nbsp;<span>поиск</span></a>
                </div>
                <form action="">
                    <div class="crfilter__form">
                        <div class="crf__form-item" >
                            <select name="" id="" data-dropdown-parent=".crfilter">
                                <option>Марка (все)</option>
                                <option value="1">Марка 1</option>
                                <option value="2">Марка 2</option>
                            </select>
                        </div>
                        <div class="crf__form-item" >
                            <select name="" id=""  disabled  data-dropdown-parent=".crfilter">
                                <option>Модель (все)</option>
                                <option value="1">Модель 1</option>
                                <option value="2">Модель 2</option>
                            </select>
                        </div>
                        <div class="crf__form-item" >
                            <select name="" id="" disabled data-dropdown-parent=".crfilter">
                                <option>Поколение (все)</option>
                                <option value="1">Поколение 1</option>
                                <option value="2">Поколение 2</option>
                            </select>
                        </div>
                        <div class="crf__form-item">
                            <select name="" id=""  class="" data-dropdown-parent=".crfilter">
                                <option>Класс авто (все)</option>
                                <option value="1">Класс авто 1</option>
                                <option value="2">Класс авто 2</option>
                            </select>
                        </div>
                        <div class="crf__form-item">
                            <select name="" id=""  class="" data-dropdown-parent=".crfilter">
                                <option>НДС (все)</option>
                                <option value="1">НДС 1</option>
                                <option value="2">НДС 2</option>
                            </select>
                        </div>
                        <div class="crf__form-item">
                            <select name="" id=""  class="" data-dropdown-parent=".crfilter" multiple="multiple" data-placeholder="Город(все)">
           
                                <option value="1" selected>Екатеринбург</option>
                                <option value="2">Москва</option>
                                <option value="2">Санкт-Петербург</option>
                                <option value="2">Город 2</option>
                                <option value="2" selected>Город 2</option>
                                <option value="2">Город 2</option>
                                <option value="2">Город 2</option>
                                <option value="2">Город 2</option>
                                <option value="2">Город 2</option>
                                <option value="2">Город 2</option>

                                <option value="2">Город 2</option>
                                <option value="2">Город 2</option>
                                <option value="2">Город 2</option>
                                <option value="2">Город 2</option>
                                <option value="2">Город 2</option>
                            </select>
                        </div>
                        <div class="crf__form-item">
                            <input type="text" placeholder="Цена от, руб">
                        </div>
                        <div class="crf__form-item">
                            <input type="text" placeholder="Цена до, руб">
                        </div>
                        <div class="crf__form-item crf__hidden">
                            <select name="" id=""  class="" data-dropdown-parent=".crfilter">
                                <option>Привод (все)</option>
                                <option value="1">Привод 1</option>
                                <option value="2">Привод 2</option>
                            </select>
                        </div>
                        <div class="crf__form-item crf__hidden">
                            <select name="" id=""  class="" data-dropdown-parent=".crfilter">
                                <option>Год выпуска от (все)</option>
                                <option value="1">2000</option>
                                <option value="2">2022</option>
                            </select>
                        </div>
                        <div class="crf__form-item crf__hidden">
                            <select name="" id=""  class="" data-dropdown-parent=".crfilter">
                                <option>Год выпуска до (все)</option>
                                <option value="1">2000</option>
                                <option value="2">2022</option>
                            </select>
                        </div>
                        <div class="crf__form-item crf__hidden">
                            <select name="" id=""  class="" data-dropdown-parent=".crfilter">
                                <option>Коробка передач (все)</option>
                                <option value="1">Коробка передач 1</option>
                                <option value="2">Коробка передач 2</option>
                            </select>
                        </div>
                        <div class="crf__form-item crf__hidden">
                            <input type="text" placeholder="Пробег от, км">
                        </div>
                        <div class="crf__form-item crf__hidden">
                            <input type="text" placeholder="Пробег до, км">
                        </div>
                        <div class="crf__form-item crf__hidden">
                            <select name="" id=""  data-dropdown-parent=".crfilter">
                                <option>Тип двигателя (все)</option>
                                <option value="1">Тип двигателя 1</option>
                                <option value="2">Тип двигателя 2</option>
                            </select>
                        </div>
                        <div class="crf__form-item crf__hidden">
                            <select name="" id=""  class="" data-dropdown-parent=".crfilter"> 
                                <option>Объем от, л (все)</option>
                                <option value="1">5</option>
                                <option value="2">6</option>
                            </select>
                        </div>
                        <div class="crf__form-item crf__hidden">
                            <select name="" id=""  data-dropdown-parent=".crfilter">
                                <option>Объем до, л (все)</option>
                                <option value="1">Привод 1</option>
                                <option value="2">Привод 2</option>
                            </select>
                        </div>
                        <div class="crf__form-item crf__form-bt">
                            <button class="btn btn-green">Показать авто</button>
                        </div> 
                    </div>
                </form>
                <div class="crfilter__bot">
                    <button class="btn btn-transparent icon-search-f crfilter__moresearch ic-a">Расширенный поиск</button>
                   <button class="crfilter__reset icon-close btn btn-transparent ">Сбросить</button>
                </div>
                
            </div>
            <div class="crfilter__bot-mobile">
                <button class="btn btn-white ">Сбросить</button>
                <button class="btn btn-green">Применить</button>
            </div>
            
        </div>
        
        <div class="crf__save-search">
            <div class="crf__save-search-it">
            <button> Mersedes, 2016-2021 <i class="icon-close crf__save-del"></i> </button> 
            </div>
            <div class="crf__save-search-it">
            <button> Мой фильтр -1 <i class="icon-close crf__save-del"></i> </button> 
            </div>
            <div class="crf__save-search-it">
            <button> Ищу Chevrolet <i class="icon-close crf__save-del"></i> </button> 
            </div>
               
        </div>
        <div class="crtop">
            <div class="crtop__bgs">
            <div class="crtop__bgs-prev disabled"><i class="icon-arrow-dl "></i></div>
            <div class="crtop__bgs-scroll">
                <div class="crtop__bgs-list">
                    <div class="crtop__bgs-item active">
                        <span class="date">
                            <span class="icon-time-c">Идут торги</span> 
                            9 фев 09:00   
                        </span>
                        <span class="count-cars icon-car">
                            296
                        </span>
                    </div>
                    <div class="crtop__bgs-item">
                        <span class="date">
                            <span class="icon-timer">Скоро</span> 
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
</span>
                    </div>
                    <div class="crtop__bgs-item">
                        <span class="date">
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
                        </span>
                    </div> <div class="crtop__bgs-item">
                        <span class="date">
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
                        </span>
                    </div> <div class="crtop__bgs-item">
                        <span class="date">
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
                        </span>
                    </div> <div class="crtop__bgs-item">
                        <span class="date">
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
                        </span>
                    </div> <div class="crtop__bgs-item">
                        <span class="date">
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
                        </span>
                    </div> <div class="crtop__bgs-item">
                        <span class="date">
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
                        </span>
                    </div> <div class="crtop__bgs-item">
                        <span class="date">
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
                        </span>
                    </div>
                    <div class="crtop__bgs-item">
                        <span class="date">
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
                        </span>
                    </div>
                    <div class="crtop__bgs-item">
                        <span class="date">
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
                        </span>
                    </div>
                    <div class="crtop__bgs-item">
                        <span class="date">
                            9 фев 10:00   
                        </span>
                        <span class="count-cars icon-car">
                            185
                        </span>
                    </div>
                    </div>
                </div>
                <div class="crtop__bgs-next disabled"><i class="icon-arrow-dr"></i></div>
            </div>
            <div class="crtop__btn-mobile">
                <button class="crtop__btn-filter icon-filter btn">Фильтр</button>
                <span class="delim"></span>
                <button class="crtop__btn-search icon-search btn">Поиск</button>
                <div class="crtop__mobile-search icon-search ic-input"><input type="text" placeholder="Поиск по №лота ..."></div>
            </div>
            <div class="crtop__sort">
                <div class="active asc"> Цена <span class="icon-arrow-long"></span></div>
                <div class="desc">Год выпуска <span class="icon-arrow-long"></span></div>
                <div class="desc">Пробег <span class="icon-arrow-long"></span></div>
            </div>
            <div class="crtop__sort-mob " >
                <div class="crtop__sort-mob-val ic-a" data-mbottom="#msort-mobile">
                    <span>Показать лоты сначала дешевле</span>
                </div>
                <div class="crtop__sort-mob-box mbottom-mobile" id="msort-mobile">
                    <div class="cts__form-title">Показать лоты </div>
                    <div class="cts__form">
                        <div class="cts__form-item">
                            <div class="cts__form-lvl">по стоимости</div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s1" value="s1" data-value="Показать лоты сначала дороже" name="mobile-sort">
                                <label for="s1">По возрастанию</label>
                            </div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s2" value="s2" checked data-value="Показать лоты сначала дешевле" name="mobile-sort">
                                <label for="s2">По уменьшению</label>
                            </div>
                        </div>
                        <div class="cts__form-item">
                            <div class="cts__form-lvl">по пробегу</div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s4" value="s4" data-value="Показать лоты сначала меньше пробег" name="mobile-sort">
                                <label for="s4">По возрастанию</label>
                            </div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s5" value="s5" data-value="Показать лоты сначала больше пробег" name="mobile-sort">
                                <label for="s5">По уменьшению</label>
                            </div>
                        </div>
                        <div class="cts__form-item">
                            <div class="cts__form-lvl">по году выпуска</div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s6" value="s6" data-value="Показать лоты по году: новее" name="mobile-sort">
                                <label for="s6">По возрастанию</label>
                            </div>
                            <div class="cts__form-r form_radio">
                                <input type="radio" id="s7" value="s7" data-value="Показать лоты по году: старше" name="mobile-sort">
                                <label for="s7">По уменьшению</label>
                            </div>
                        </div>
                        <div  class="cts__form-bt"><button class="btn btn-green ">Применить</button></div>
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

            <div class="critem critem-noauth">
                <div class="critem__top">
                     <div class="critem__tags card-tags-box">
                        <span class="tag-nds"> Без НДС</span>
                        <span class="tag-car"> Только на RRT </span>
                        <span class="tag-delivery"> Бесплатная доставка </span>
                    </div>
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
                        <span class="icon-vin icon-vin-success" data-tooltip="VIN проверен"></span>

                    </div>
                    <div class="critem__info-km  icon-speed text-icon">
                        78 000 км
                    </div>
                    <div class="critem__info-map icon-map text-icon">
                        <a href="#">Санкт-Петербург</a>
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
                </div>
            </div>
            <div class="critem critem-noauth">
                <div class="critem__top">
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
                        <span class="icon-vin icon-vin-default" data-tooltip="VIN на проверке"></span>
                    </div>
                    <div class="critem__info-km icon-speed text-icon">
                        78 000 км
                    </div>
                    <div class="critem__info-map icon-map text-icon">
                        <a href="#">Санкт-Петербург</a>
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
                </div>
            </div>
            <div class="critem critem-noauth">
                <div class="critem__top">
                     <div class="critem__tags card-tags-box">
                        <span class="tag-nds"> Без НДС</span>
                        <span class="tag-car"> Только на RRT </span>
                        <span class="tag-delivery"> Бесплатная доставка </span>
                    </div>
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
                        <span class="icon-vin icon-vin-error " data-tooltip="VIN не проверен"></span>
                    </div>
                    <div class="critem__info-km icon-speed text-icon">
                        78 000 км
                    </div>
                    <div class="critem__info-map icon-map text-icon">
                        <a href="#">Санкт-Петербург</a>
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
                </div>
            </div>
            <div class="critem critem-noauth">
                <div class="critem__top">
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
                </div>
            </div>

            <!--Карточки Продавец -->

            <div class="critem critem-auth ">
                <div class="critem__top">
                    <a class="critem__top-bidsall icon-bids-all" href=""></a>
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
                    <div class="critem__info-minprice icon-tag text-icon">
                        Минимальная цена не достигнута
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
                    <a class="critem__top-bidsall icon-bids-all" href=""></a>
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
                    <div class="critem__info-minprice icon-tag text-icon">
                        Минимальная цена не достигнута
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
                    <a class="critem__top-bidsall icon-bids-all" href=""></a>
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
                    <div class="critem__info-minprice minprice-success icon-tag text-icon">
                        Минимальная цена достигнута
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
                    <a class="critem__top-bidsall icon-bids-all" href=""></a>
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
                    <div class="critem__info-minprice icon-tag text-icon">
                        Минимальная цена не достигнута
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
                    <a class="critem__top-bidsall icon-bids-all" href=""></a>
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
                    <a class="critem__top-bidsall icon-bids-all mbox" href="#mbidsall"></a>
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