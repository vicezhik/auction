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
                    Индивидуальный предприниматель
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
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>4</span></div>
        </div>
        <div class="pf__data-box pf__data-address pf__data-address-org">
            <div class="pf__data-title">
                <span class="icon-map"></span>
                Юридический адрес
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
                <div class="pf__form-item pf__it-office">
                    <div class="pf__form-lvl">Помещение</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="№ офиса" value="">
                        </div>
				</div>
            </div>
        </div>
        <div class="pf__data-bt">
            <button class="btn btn-transparent icon-save save-draft">Сохранить как черновик</button>
            <button class="btn btn-white" >Вернуться назад</button>
            <button class="btn btn-green" >Следующий шаг</button>
        </div>
        </div>
        
    </div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>