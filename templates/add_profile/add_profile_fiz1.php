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
            <div class="pf__type-item">
                <div class="pf__type-lvl">Статус</div>
                <div class="pf__type-value pf__form">
                    <div class="pf__form-radio">
                        <div class="pf__form-r form_radio">
                            <input type="radio" id="ooo" value="ooo" name="status">
                            <label for="ooo">Юридическое лицо</label>
                        </div>
                        <div class="pf__form-r form_radio">
                            <input type="radio" id="ip" value="ip"  name="status">
                            <label for="ip">Индивидуальный предприниматель</label>
                        </div>
                        <div class="pf__form-r form_radio" >
                            <input type="radio" id="fiz" value="fiz" checked  name="status">
                            <label for="fiz">Физическое лицо</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pf__type-item">
                <div class="pf__type-lvl">Тип профиля</div>
                <div class="pf__type-value pf__form">
                    <div class="pf__form-radio">
                        <div class="pf__form-r form_radio">
                            <input type="radio" id="seller" value="seller"  name="type">
                            <label for="seller">Продавец</label>
                        </div>
                        <div class="pf__form-r form_radio">
                            <input type="radio" id="buyer" value="buyer" checked name="type">
                            <label for="buyer">Покупатель</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pf__progress">
            <div class="pf__progress-step active"><span>1</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>2</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step"><span>3</span></div>
        </div>
        <div class="pf__data-box pf__data-passport">
            <div class="pf__data-title">
                <span class="icon-user"></span>
                Паспортные данные
            </div>
            <div class="pf__form">
                <div class="pf__form-photo">
                    <label>
                        <div class="pf__form-preview"></div>
                        <span class="icon-photo"></span>
                        <input type="file">
                    </label>
                </div>
                <div class="pf__form-item pf__it-lastname">
					<div class="pf__form-lvl">Ваше имя</div>
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите фамилию ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__it-firstname">
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите имя ..." value="">
                        </div>
				</div>
                <div class="pf__form-item pf__it-surname">
					<div class="pf__form-value">
						    <input type="text" placeholder="Введите отчество ..." value="">
                        </div>
				</div>
                <div class="pf__form-item  pf__it-birth">
					<div class="pf__form-lvl">Дата рождения</div>
					<div class="pf__form-value">
                        <input type="text" placeholder="__.__.____" value="">
                        <span class="icon-calendar"></span>
					</div>
				</div>
                <div class="pf__form-item pf__it-gender">
					<div class="pf__form-lvl">Пол</div>
					<div class="pf__form-radio">
                        <div class="pf__form-r form_radio">
                            <input type="radio" id="men" value="men"  checked>
                            <label for="men">мужской</label>
                        </div>
                        <div class="pf__form-r form_radio">
                            <input type="radio" id="fem" value="fem">
                            <label for="fem">женский</label>
                        </div>
					</div>
				</div>
                <div class="pf__form-item pf__it-nat">
					<div class="pf__form-lvl">Гражданство</div>
					<div class="pf__form-value">
                        <select name="" id="">
                            <option value="">Российская Федерация</option>
                            <option value="">Иностранный гражданин</option>
                        </select>
					</div>
				</div>
                <div class="pf__form-item pf__it-passp">
					<div class="pf__form-lvl">Паспорт</div>
					<div class="pf__form-row">
                        <div class="pf__form-value">
						    <input type="text" placeholder="Серия" value="">
                        </div>
                        <div class="pf__form-value">
						    <input type="text" placeholder="Номер" value="">
                        </div>
					</div>
				</div>
                <div class="pf__form-item pf__it-passpdate">
					<div class="pf__form-lvl">Дата выдачи</div>
					<div class="pf__form-value">
                        <input type="text" placeholder="__.__.____" value="">
                        <span class="icon-calendar"></span>
					</div>
				</div>
                <div class="pf__form-item pf__it-place">
					<div class="pf__form-lvl">Место рождения</div>
					<div class="pf__form-value">
                        <input type="text" placeholder="Введите название ..." value="">
					</div>
				</div>
                <div class="pf__form-item pf__it-passpwho">
					<div class="pf__form-lvl">Кем выдан</div>
					<div class="pf__form-value">
                        <input type="text" placeholder="Введите кем выдан паспорт ..." value="">
					</div>
				</div>
                <div class="pf__form-item pf__it-passpkod">
					<div class="pf__form-lvl">Код подразделения</div>
					<div class="pf__form-value">
                        <input type="text" placeholder="___—___" value="">
					</div>
				</div>

            </div>
        </div>
        <div class="pf__data-bt">
            <button class="btn btn-transparent icon-save save-draft">Сохранить как черновик</button>
            <button class="btn btn-green">Следующий шаг</button>
        </div>
        </div>
        
    </div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>