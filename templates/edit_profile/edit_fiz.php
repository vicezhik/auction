<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
?>
<div class="profile bg-gray">
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li><a href=""><span class="icon-home"></span>Главная</a></li>
            <li><a href="">Личный кабинет</a></li>
            <li><span>Иванов Александр Петрович</span></li>
        </ul>
        <div class="pf__edit-h1">
            <h1>Редактировать профиль</h1>
            <div class="pf__docedit-download"><a href="" class="btn btn-green "><span class="icon-download"></span>
                    Скачать договор продавца</a></div>
        </div>

        <div class="pf__edit-box ">
            <div class="pf__edit-top">
                <div class="pf__form-photo">
                    <label>
                        <div class="pf__form-preview">
                            <img src="/i/user-example.jpg" alt="">
                        </div>
                        <span class="icon-photo"></span>
                        <input type="file">
                    </label>
                </div>
                <div class="pf__edit-user">
                    <div class="name">Иванов Александр Петрович</div>
                    <div class="type">Физическое лицо / Покупатель</div>
                    <div class="pf__status-user"><span class="active">Активный</span><span class="check">На проверке</span><span
                            class="blocked">Заблокирован</span><span class="draft">Черновик</span></div>
                </div>
                <div class="pf__edit-actions">
                    <button class="btn btn-transparent icon-delete btn_delete">Удалить профиль</button>
                    <button class="btn btn-green btn_save">Сохранить</button>
                </div>
            </div>
            <div class="pf__edit-data accordeon-out ">
                <div class="pf__data-title accordeon-title accordeon-open" data-accordeon=".pf__form-passp">
                    <span class="icon-user"></span>
                    <span class="title-text">Паспортные данные</span>
                    <i class="icon-down"></i>
                </div>
                <div class="accordeon-box pf__form-passp" style="display:block">
                    <div class="pf__form">

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
                                    <input type="radio" id="men" value="men" checked>
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
                <div class="pf__data-title accordeon-title" data-accordeon=".pf__data-address">
                    <span class="icon-map"></span>
                    <span class="title-text">Адрес прописки</span>
                    <i class="icon-down"></i>
                </div>
                <div class="accordeon-box pf__data-address">
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
                                <input type="text" placeholder="Введите название улицы / переулка / площади / шоссе..."
                                    value="">
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
                                <input type="checkbox" value="1" name="" id="address-check" checked>
                                <label for="address-check">Адрес прописки совпадает с адресом проживания</label>
                            </div>
                        </div>
                    </div>
                    <div class="pf__address-home">
                        <div class="pf__data-title">
                            <span class="icon-map"></span>
                            Адрес проживания
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
                                    <input type="text"
                                        placeholder="Введите название улицы / переулка / площади / шоссе..." value="">
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
                        </div>
                    </div>
                </div>
                <div class="pf__data-title accordeon-title" data-accordeon=".pf__form-docs">
                    <span class="icon-docs"></span>
                    <span class="title-text">Документы</span>
                    <i class="icon-down"></i>
                </div>
                <div class="accordeon-box pf__form-docs">
                    <div class="pf__docs-list">
                        <div class="pf__docs-item">
                            <div class="pf__docs-icon"><span class="file pdf">pdf</span></div>
                            <div class="pf__docs-name">Паспорт РФ (1-ая страница) </div>
                            <div class="pf__docs-info">
                                <input type="file" class="input-doc-file">
                                <div class="name">
                                    Scan-0345.pdf
                                </div>
                                <div class="date">14.02.2022</div>
                                <div class="tag"><span class="tag-success">Проверен</span></div>

                            </div>
                            <div class="pf__docs-btns">
                                <button class="docs-menu icon-openmenu btn btn-transparent"></button>
                                <ul>
                                    <li><button class="btn btn-transparent icon-download download-file">Загрузить другой
                                            файл</button></li>
                                    <li><button class="btn btn-transparent icon-delete">Удалить</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pf__docs-item">
                            <div class="pf__docs-icon"><span class="file pdf">pdf</span></div>
                            <div class="pf__docs-name">Паспорт РФ (прописка) </div>
                            <div class="pf__docs-info">
                                <input type="file" class="input-doc-file">
                                <div class="progress">
                                    <div class="progress-name">
                                        Scan-0345.pdf
                                    </div>
                                    <div class="progress-value">
                                        75%
                                    </div>
                                    <div class="progress-line">
                                        <div style="width:75%"></div>
                                    </div>

                                </div>

                            </div>
                            <div class="pf__docs-btns">
                                <button class="btn btn-transparent icon-download dd-btn"></button>
                            </div>
                        </div>
                        <div class="pf__docs-item pf__docs-item-nofile">
                            <div class="pf__docs-icon"><span class="nofile"></span></div>
                            <div class="pf__docs-name">Договор с подписью </div>
                            <div class="pf__docs-info"> <input type="file" class="input-doc-file" value=""></div>
                            <div class="pf__docs-btns">
                                <button class="btn btn-transparent icon-download download-file">Загрузить
                                    документ</button>
                            </div>
                        </div>
                    </div>
                    <div class="pf__docs-text icon-info">Скачайте договор в верхнем углу страницы. Распечатайте и
                        подпишите документ. Загрузите подписанный договор.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>