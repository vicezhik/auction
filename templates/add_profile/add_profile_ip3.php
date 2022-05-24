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
            <div class="pf__progress-step active success"><span>2</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step active"><span>3</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>4</span></div>
        </div>
        <div class="pf__data-box pf__data-address pf__data-address-org">
            <div class="pf__data-title">
                <span class="icon-bank"></span>
                Банковские реквизиты
            </div>
            <div class="pf__form">
                <div class="pf__form-item pf__b-rsch">
					<div class="pf__form-lvl">Расчётный счёт</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите 20 цифр р/с" value="">
                        </div>
				</div>
                <div class="pf__form-item pf__b-ksch">
                    <div class="pf__form-lvl">Корреспонденский счёт</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите 20 цифр к/с" value="">
                        </div>
				</div>
                <div class="pf__form-item pf__b-bik">
                    <div class="pf__form-lvl">БИК</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите 9 цифр БИК" value="">
                        </div>
				</div>
                <div class="pf__form-item pf__b-bank">
                    <div class="pf__form-lvl">Банк</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите название банка" value="">
                        </div>
				</div>
            </div>
            <div class="pf__data-title">
                <span class="icon-user"></span>
                Представитель
            </div>
            <div class="pf__form">
                <div class="pf__form-item pf__p-lname">
					<div class="pf__form-lvl">Фамилия</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите фамилию ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__p-fname">
                    <div class="pf__form-lvl">Имя</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите имя ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__p-sname">
                    <div class="pf__form-lvl">Отчество</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите отчество ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__b-pos">
                    <div class="pf__form-lvl">Должность</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите должность ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__b-osn">
                    <div class="pf__form-lvl">Действует на основании</div>
					<div class="pf__form-value">
                        <select name="" id="">
                            <option value="">Устава</option>
                            <option value="">Другое</option>
                        </select>
					</div>
				</div>
                <div class="pf__form-item pf__b-unum">
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите № устава ..." value="">
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