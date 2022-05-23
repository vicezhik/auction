<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
?>
<div class="profile bg-gray">
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li><a href=""><span class="icon-home"></span>Главная</a></li>
            <li><a href="">Личный кабинет</a></li>
            <li><span>Добавить профиль</span></li>
        </ul>
        <h1>Добавить профиль</h1>
        <div class="profile-step">
            <div class="pf__type">
            <div class="pf__type-item  pf__type-set">
                <div class="pf__type-lvl">Статус</div>
                <div class="pf__type-value">
                    Физическое лицо
                </div>
            </div>
            <div class="pf__type-item  pf__type-set">
                <div class="pf__type-lvl">Тип профиля</div>
                <div class="pf__type-value pf__type-set">
                    Покупатель
                </div>
            </div>
        </div>
        <div class="pf__progress">
            <div class="pf__progress-step active success"><span>1</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step active"><span>2</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>3</span></div>
        </div>
        <div class="pf__data-box pf__data-address">
            <div class="pf__data-title">
                <span class="icon-map"></span>
                Адрес прописки
            </div>
            <div class="pf__form">
                <div class="pf__form-item pf__it-index">
					<div class="pf__form-lvl">Индекс</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Индекс ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__it-region">
                    <div class="pf__form-lvl">Регион</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите название региона ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__it-district">
                    <div class="pf__form-lvl">Район</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите название района ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__it-city">
                    <div class="pf__form-lvl">Город / Населённый пункт</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите название населённого пункта ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__it-street">
                    <div class="pf__form-lvl">Улица</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите название улицы / переулка / площади / шоссе..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__it-house">
                    <div class="pf__form-lvl">Дом</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="№ дома" value="">
                        </div>
				</div>
                <div class="pf__form-item pf__it-korpus">
                    <div class="pf__form-lvl">Корпус</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="№ корп" value="">
                        </div>
				</div>
                <div class="pf__form-item pf__it-flat">
                    <div class="pf__form-lvl">Квартира</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="№ кв" value="">
                        </div>
				</div>
                <div class="pf__form-item pf__it-address-check ">
					<div class="pf__form-value form_checkbox">
                        <input type="checkbox" value="1" name="" id="address-check">
                        <label for="address-check">Адрес прописки совпадает с адресом проживания</label>
                    </div>
				</div>
            </div>
        </div>
        <div class="pf__data-bt">
            <a href="" class="btn btn-transparent icon-save save-draft">Сохранить как черновик</a>
            <a class="btn btn-white" href="">Вернуться назад</a>
            <a class="btn btn-green" href="">Следующий шаг</a>
        </div>
        </div>
        
    </div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>