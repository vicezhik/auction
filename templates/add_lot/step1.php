<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
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
                <div class="progress__line-title">Уже заполнено <span>5</span>%</div>
                <div class="progress__line-line">
                    <div class="pl-line-in" style="width:50%"></div>
                    <div class="pl-line-full" style="width:5%"></div>
                </div>
                <div class="progress__line-info">+50<span class="small">%</span> Увеличьте шанс продажи, заполнив данные лота</div>
            </div>
        </div>
       
        <div class="pf__progress lt__progress-steps">
            <div class="pf__progress-step active"><span>1</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>2</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>3</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>4</span></div>
        </div>
        <div class="lt__data">
        <div class="lt__data-box">
            <div class="lt__data-title">
                Обзор лота
            </div>
            <div class="lt__form">
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form" data-placeholder="Выберите марку">
                        <option value=""></option>
                        <option value="1">Марка 1</option>
                        <option value="2">Марка 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form" disabled data-placeholder="Выберите модель">
                        <option value=""></option>
                        <option value="1">Модель 1</option>
                        <option value="2">Модель 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form" disabled data-placeholder="Поколение">
                        <option value=""></option>
                        <option value="1">Поколение 1</option>
                        <option value="2">Поколение 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form"  data-placeholder="Класс авто">
                        <option value=""></option>
                        <option value="1">Класс авто 1</option>
                        <option value="2">Класс авто 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form"  data-placeholder="Тип кузова">
                        <option value=""></option>
                        <option value="1">Тип кузова 1</option>
                        <option value="2">Тип кузова 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form" data-placeholder="Цвет авто">
                        <option value=""></option>
                        <option value="1">Цвет авто 1</option>
                        <option value="2">Цвет авто 2</option>
                    </select>
				</div>
                
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form" data-placeholder="Год выпуска">
                        <option value=""></option>
                        <option value="1">Год выпуска 1</option>
                        <option value="2">Год выпуска 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <input type="text" name="" placeholder="Пробег, км">
				</div>
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form" data-placeholder="Объем двигателя, л">
                        <option value=""></option>
                        <option value="1">Объем двигателя, л 1</option>
                        <option value="2">Объем двигателя, л 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form" data-placeholder="Коробка передач">
                        <option value=""></option>
                        <option value="1">Коробка передач 1</option>
                        <option value="2">Коробка передач 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form" data-placeholder="Тип двигателя">
                        <option value=""></option>
                        <option value="1">Тип двигателя 1</option>
                        <option value="2">Тип двигателя 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form" data-placeholder="Привод">
                        <option value=""></option>
                        <option value="1">Привод 1</option>
                        <option value="2">Привод 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <select name="" id="" data-dropdown-parent=".lt__form" data-placeholder="Кол-во комлектов ключей">
                        <option value=""></option>
                        <option value="1">Кол-во комлектов ключей 1</option>
                        <option value="2">Кол-во комлектов ключей 2</option>
                    </select>
				</div>
                <div class="lt__form-item">
                    <input type="text" name="" placeholder="Введите VIN лота ...">
				</div>
                <div class="lt__form-item">
                    <input type="text" name="" placeholder="Введите данные ПТС ...">
				</div>
                <div class="lt__form-item">
					<div class="lt__form-radio">
                        <div class="lt__form-r form_radio">
                            <input type="radio" id="pts1" value="1"  checked>
                            <label for="pts1">ПТС оргинал</label>
                        </div>
                        <div class="lt__form-r form_radio">
                            <input type="radio" id="pts2" value="2">
                            <label for="pts2">ПТС дубликат</label>
                        </div>
					</div>
				</div>
                <div class="lt__form-item">
                    <input type="text" name="" placeholder="Введите данные СТС ...">
				</div>
                <div class="lt__form-item">
                    <input type="text" name="" placeholder="Введите регистрационный № ...">
				</div>
            </div>
            </div>
            <div class="lt__data-box">
                <div class="lt__data-title">
                    Адрес продажи
                </div>
                <div class="lt__form">
                    <div class="lt__form-item lt__form-address ">
                        <div class="ic-input icon-map">
                            <input type="text" name="" placeholder="Введите адрес">
                        </div>
                    </div>
                    <div class="lt__form-item  lt__form-inspect">
                        <div class="form_checkbox">
                            <input type="checkbox" value="1" name="" id="osm_2">
                            <label for="osm_2">Возможен личный осмотр</label>
                        </div>
                            
                    </div>
                    <div class="lt__form-item lt__form-onmap">
                        <button class="btn btn-transparent icon-map2">Показать на карте</button>
                    </div>
                </div>
                
            </div>
            <div class="lt__data-box">
                <div class="lt__data-title">
                    Настройки аукциона
                </div>
                <div class="lt__form">
                    <div class="lt__form-item">
                        <div class="lt__form-lvl">Минимальная цена</div>
                        <div class="lt__form-value">
                            <input type="text" placeholder="Цена, руб" value="">
                        </div>
                    </div>
                    <div class="lt__form-item">
                        <div class="lt__form-lvl">Цена купить сейчас <i class="icon-info" data-tooltip="Информация"></i></div>
                        <div class="lt__form-value">
                            <input type="text" placeholder="Цена, руб" value="">
                        </div>
                    </div>
                    <div class="lt__form-item">
                        <div class="lt__form-lvl">Применение НДС</div>
                        <div class="lt__form-value">
                            <select name="" id="" data-dropdown-parent=".lt__form">
                                <option value="0">НДС не облагается</option>
                                <option value="1">НДС облагается</option>
                            </select>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="lt__data-bt">
            <div></div>
            <div class="lt__data-bt-draft"><button class="btn btn-transparent icon-save save-draft">Сохранить как черновик</button></div>
            <div><button class="btn btn-green">Следующий шаг</button></div>
        </div>
        </div>

    </div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>