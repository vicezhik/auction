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
                <div class="progress__line-title">Уже заполнено <span>75</span>%</div>
                <div class="progress__line-line">
                    <div class="pl-line-in" style="width:90%"></div>
                    <div class="pl-line-full" style="width:75%"></div>
                </div>
                <div class="progress__line-info">+15<span class="small">%</span> Увеличьте шанс продажи, заполнив данные лота</div>
            </div>
        </div>
       
        <div class="pf__progress lt__progress-steps">
            <div class="pf__progress-step active"><span>1</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step active"><span>2</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step active"><span>3</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>4</span></div>
        </div>
        <div class="lt__data">
            <div class="lt__data-box">
            <div class="lt__data-title">
                Техническое состояние лота
            </div>
            <div class="lt__form">
                <div class="lt__form-titem form_textarea">
                    <textarea name="" id="" placeholder="Опишите техническое состояние лота ..." maxlength="500"></textarea>
                    <div class="textarea-counter"><span>0</span>/500</div>
                    <p class="icon-info lt__form-info"> Если лот не проходил диагностику в нашем сервисе, в карточке лота будет стоять отметка “Диагностика со слов клиента”</p>
				</div>
            </div>
            </div>
            <div class="lt__data-box">
                <div class="lt__data-title">
                    Состояние кузова
                </div>
                <div class="lt__scan">
                    <div class="lt__scan-text">Отметьте повреждения на схеме, если они есть. Нажмите на деталь авто. </div>
                    <div class="lt__scan-box">
                        <div class="lt__scan-svg car-drow">
                            <?include $_SERVER['DOCUMENT_ROOT'].'/include/insert_svg_lot.php';?>
                        </div>
                        <div class="lt__scan-desc">
                            <ul>
                                <li><span class="lt__scan-desc-white"></span> Нет повреждений</li>
                                <li><span class="lt__scan-desc-yellow"></span>Незначительные повреждения</li>
                                <li><span class="lt__scan-desc-orange"></span>Средние повреждения</li>
                                <li><span class="lt__scan-desc-red"></span>Значительные повреждения</li>
                            </ul>
                        </div>
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