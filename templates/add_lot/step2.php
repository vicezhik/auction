<?
include $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
?>
<div class="addlot bg-gray">
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li><a href=""><span class="icon-home"></span>Главная</a></li>
            <li><a href="">Мои лоты</a></li>
            <li><span>Создание лота</span></li>
        </ul>
        <div class="lt__title-box">
            <h1>Создать лот</h1>
            <div class="progress__line lt__progress-line">
                <div class="progress__line-title">Уже заполнено <span>55</span>%</div>
                <div class="progress__line-line">
                    <div class="pl-line-in" style="width:75%"></div>
                    <div class="pl-line-full" style="width:55%"></div>
                </div>
                <div class="progress__line-info">+20<span class="small">%</span> Увеличьте шанс продажи, заполнив данные лота</div>
            </div>
        </div>

        <div class="pf__progress lt__progress-steps">
            <div class="pf__progress-step active"><span>1</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step active"><span>2</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>3</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>4</span></div>
        </div>
        <div class="lt__data">
            <div class="lt__data-box">
                <div class="lt__data-title lt__data-search">
                    Комплектация авто
                    
                    <div class=" ic-input icon-search ">
                        <input type="text" name="" placeholder="Поиск комплектации ...">
                    </div>
                </div>

                <div class="lt__form-list list-3columns">
                    <div class="lt__form-litem">
                        <div class="lt__form-litem-title ">
                            <span>Безопасность</span>
                        </div>

                        <div class="lt__form-litem-inputs">
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="1" name="" id="l1">
                                <label for="l1">Подушка безопасности водителя</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="2" name="" id="l2">
                                <label for="l2">Подушка безопасности пассажира</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="l3">
                                <label for="l3">Антипробуксовочная система (ASR)</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="4" name="" id="l4">
                                <label for="l4">Система помощи при торможении (BAS. EBD)</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="5" name="" id="l5">
                                <label for="l5">Система помощи при старте в гору (HSA)</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="6" name="" id="l6">
                                <label for="l6">Система помощи при спуске</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="7" name="" id="l7">
                                <label for="l7">Крепление детского кресла (задний ряд) ISO FIX</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="8" name="" id="l8">
                                <label for="l8">Датчик давления в шинах</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="9" name="" id="l9">
                                <label for="l9">Антиблокировочная система (ABS)</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="10" name="" id="l10">
                                <label for="l10">Система стабилизации (ESP)</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="11" name="" id="l11">
                                <label for="l11">Блокировка замков задних дверей</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="12" name="" id="l12">
                                <label for="l12">ЭРА-ГЛОНАСС</label>
                            </div>
                        </div>
                    </div>
                    <div class="lt__form-litem">
                        <div class="lt__form-litem-title">
                        <span>Противоугонная система</span>
                        </div>

                        <div class="lt__form-litem-inputs">
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="1" name="" id="p1">
                                <label for="p1">Центральный замок</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="2" name="" id="p2">
                                <label for="p2">Спутник </label>
                            </div>
                        </div>
                    </div>
                    <div class="lt__form-litem">
                        <div class="lt__form-litem-title">
                        <span>Освещение</span>
                        </div>

                        <div class="lt__form-litem-inputs">
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="1" name="" id="s1">
                                <label for="s1">Противотуманные</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="2" name="" id="s2">
                                <label for="s2">Омыватели фар</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="s3">
                                <label for="s3">Адаптивное освещение</label>
                            </div>

                        </div>
                    </div>

                    <div class="lt__form-litem">
                        <div class="lt__form-litem-title">
                        <span> Комплектность</span>
                        </div>
                        <div class="lt__form-litem-inputs">
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="1" name="" id="d1">
                                <label for="d1">Передние электростеклоподъемники</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="2" name="" id="d2">
                                <label for="d2">Задние электростеклоподъемники </label>
                            </div>
                        </div>
                    </div>

                    <div class="lt__form-litem">
                        <div class="lt__form-litem-title ">
                        <span> Комфорт</span>
                        </div>
                        <div class="lt__form-litem-inputs">
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="1" name="" id="a1">
                                <label for="a1">Кондиционер</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="2" name="" id="a2">
                                <label for="a2">Круиз-контроль</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="a3">
                                <label for="a3">Парктроник задний</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="4" name="" id="a4">
                                <label for="a4">Камера задняя</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="5" name="" id="a5">
                                <label for="a5">Регулировка руля по высоте</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="6" name="" id="a6">
                                <label for="a6">Мультифункциональное рулевое колесо</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="7" name="" id="a7">
                                <label for="a7">Бортовой компьютер</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="8" name="" id="a8">
                                <label for="a8">Система доступа без ключа</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="9" name="" id="a9">
                                <label for="a9">Запуск двигателя с кнопки</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="10" name="" id="a10">
                                <label for="a10">Электропривод зеркал</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="11" name="" id="a11">
                                <label for="a11">Электростеклоподъёмники передние</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="12" name="" id="a12">
                                <label for="a12">Электростеклоподъёмники задние</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="12" name="" id="a13">
                                <label for="a13">Усилитель руля</label>
                            </div>
                        </div>
                    </div>
                    <div class="lt__form-litem">
                        <div class="lt__form-litem-title">
                        <span>Элементы экстерьеров</span>
                        </div>
                        <div class="lt__form-litem-inputs">
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="1" name="" id="m1">
                                <label for="m1">Легкосплавные диски</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="2" name="" id="m2">
                                <label for="m2">Диски 16</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="m3">
                                <label for="m3">Металлик</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="m4">
                                <label for="m4">Рейлинги на крыше</label>
                            </div>

                        </div>
                    </div>
                    <div class="lt__form-litem">
                        <div class="lt__form-litem-title">
                        <span>Салон</span>
                        </div>
                        <div class="lt__form-litem-inputs">
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="1" name="" id="b1">
                                <label for="b1">Материал салона - Искусственная кожа</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="2" name="" id="b2">
                                <label for="b2">Регулировка сиденья водителя по высоте</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="b3">
                                <label for="b3">Отделка кожей рулевого колеса</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="b4">
                                <label for="b4">Складывающееся заднее сиденье</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="b5">
                                <label for="b5">Передний центральный подлокотник</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="b6">
                                <label for="b6">Третий задний подголовник</label>
                            </div>

                        </div>
                    </div>
                    <div class="lt__form-litem">
                        <div class="lt__form-litem-title">
                        <span> Помощь при вождении</span>
                        </div>
                        <div class="lt__form-litem-inputs">
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="1" name="" id="c1">
                                <label for="c1">Автоматический парковщик</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="2" name="" id="c2">
                                <label for="c2">Датчик дождя</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="c3">
                                <label for="c3">Датчик света</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="c4">
                                <label for="c4">Парктроник задний</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="c5">
                                <label for="c5">Парктроник передний</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="c6">
                                <label for="c6">Система контроля слепых зон</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="c7">
                                <label for="c7">Камера заднего вида</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="c8">
                                <label for="c8">Круиз-контроль</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="c9">
                                <label for="c9">Бортовой компьютер</label>
                            </div>

                        </div>
                    </div>
                    <div class="lt__form-litem">
                        <div class="lt__form-litem-title">
                        <span>  Управление климатом и обогрев</span>
                        </div>

                        <div class="lt__form-litem-inputs">
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="1" name="" id="e1">
                                <label for="e1">Климат-контроль многозонный</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="2" name="" id="e2">
                                <label for="e2">Обогрев передних сидений</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="e3">
                                <label for="e3">Обогрев задних сидений</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="e4">
                                <label for="e4">Обогрев зеркал</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="e5">
                                <label for="e5">Обогрев заднего стекла</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="e6">
                                <label for="e6">Обогрев руля</label>
                            </div>

                        </div>
                    </div>
                    <div class="lt__form-litem">
                        <div class="lt__form-litem-title">
                        <span> Мультимедия и навигация</span>
                        </div>

                        <div class="lt__form-litem-inputs">
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="1" name="" id="f1">
                                <label for="f1">CD/DVD/Blu-ray</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="2" name="" id="f2">
                                <label for="f2">MP3</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="f3">
                                <label for="f3">Радио</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="f4">
                                <label for="f4">Видео</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="f5">
                                <label for="f5">Управление на руле</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="f6">
                                <label for="f6">USB</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="f7">
                                <label for="f7">AUX</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="f8">
                                <label for="f8">Bluetooth</label>
                            </div>
                            <div class="lt__form-litem-input form_checkbox ">
                                <input type="checkbox" value="3" name="" id="f9">
                                <label for="f9">GPS-навигатор</label>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="lt__data-box">
                <div class="lt__data-title">
                    Добавить ещё комплектацию
                </div>
                <div class="lt__form">
                    <div class="lt__form-item lt__item-rcompl">
                        <select name="" id="" data-dropdown-parent=".lt__form" data-placeholder="Раздел комплектации">
                            <option value=""></option>
                            <option value="1">Безопасность</option>
                            <option value="2">Противоугонная система</option>
                            <option value="1">Освещение</option>
                            <option value="1">Комплектность</option>
                            <option value="1">Комфорт</option>
                            <option value="1">Элементы экстерьеров</option>
                            <option value="1">Салон</option>
                            <option value="1">Помощь при вождении</option>
                            <option value="1">Управление климатом и обогрев</option>
                            <option value="1">Мультимедия и навигация</option>
                        </select>
                       
                    </div>
                    <div class="lt__form-item lt__item-compl">
                        <input type="text" name="" placeholder="Введите название комплектации ....">
                    </div>
                    <div class="lt__form-bt">
                        <button class="btn btn-green">Добавить</button>
                    </div>
                </div>
                <div class="lt__item-compl-ul">
                    <ul>
                        <li>Элементы экстерьера / Диски 16 <button class="btn btn-transparent icon-close"></button></li>
                        <li>Другое / Комплект зимней резины <button class="btn btn-transparent icon-close"></button></li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <div class="lt__data-bt">
            <div class="lt__data-bt-draft"><button class="btn btn-transparent icon-save save-draft">Сохранить как черновик</button></div>
            <div  class="lt__data-bt-goback"><button class="btn btn-white">Вернуться назад</button></div>
            <div><button class="btn btn-green">Следующий шаг</button></div>
        </div>
    </div>

</div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
?>