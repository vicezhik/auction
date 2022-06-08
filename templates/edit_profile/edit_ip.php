<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
?>
<div class="profile bg-gray">
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li><a href=""><span class="icon-home"></span>Главная</a></li>
            <li><a href="">Личный кабинет</a></li>
            <li><span>ИП Курило Денис Петрович</span></li>
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
                    <div class="name">ИП Курило Денис Петрович</div>
                    <div class="type">Индивидуальный предприниматель / Продавец</div>
                    <div class="status"><span class="active">Активный</span></div>
                </div>
                <div class="pf__edit-actions">
                    <button class="btn btn-transparent icon-delete btn_delete">Удалить профиль</button>
                    <button class="btn btn-green btn_save">Сохранить</button>
                </div>
            </div>
            <div class="pf__edit-data accordeon-out ">
                <div class="pf__data-title accordeon-title accordeon-open" data-accordeon=".pf__ip-data">
                    <span class="icon-ip"></span>
                    <span class="text-desctop title-text">Данные индивидуального предринимателя</span>
                    <span class="text-mobile title-text">Данные ИП</span>
                    <i class="icon-down"></i>
                </div>
                <div class="accordeon-box pf__ip-data" style="display:block">
                    <div class="pf__form">
                        <div class="pf__form-item pf__ip-name">
                            <div class="pf__form-lvl">Индивидуальный предприниматель</div>
                            <div class="pf__form-value">
                                <input type="text" placeholder="Введите имя предпринимателя ..." value="">
                            </div>
                        </div>
                        <div class="pf__form-item pf__ip-torg">
                            <div class="pf__form-lvl">Торговое наименование</div>
                            <div class="pf__form-value">
                                <input type="text" placeholder="Введите наименование ..." value="">
                            </div>
                        </div>
                        <div class="pf__form-item pf__ip-ogrn">
                            <div class="pf__form-lvl">ОГРН</div>
                            <div class="pf__form-value">
                                <input type="text" placeholder="Введите 13 цифр ОГРН ..." value="">
                            </div>
                        </div>
                        <div class="pf__form-item pf__ip-inn">
                            <div class="pf__form-lvl">ИНН</div>
                            <div class="pf__form-value">
                                <input type="text" placeholder="Введите 10 цифр ИНН ..." value="">
                            </div>
                        </div>
                        <div class="pf__form-item pf__ip-nalog">
                            <div class="pf__form-lvl">Тип налогобложения</div>
                            <div class="pf__form-value">
                                <select name="" id="">
                                    <option value="">УСН</option>
                                    <option value="">ОСН</option>
                                </select>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="pf__data-title accordeon-title" data-accordeon=".pf__ip-address">
                    <span class="icon-map"></span>
                    <span class="title-text">Юридический адрес</span>
                    <i class="icon-down"></i>
                </div>
                <div class="accordeon-box pf__ip-address">
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
                        <div class="pf__form-item pf__it-office">
                            <div class="pf__form-lvl">Помещение</div>
                            <div class="pf__form-value">
                                <input type="text" placeholder="№ офиса" value="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pf__data-title accordeon-title" data-accordeon=".pf__ip-bank">
                    <span class="icon-bank"></span>
                    <span class="title-text">Банковские реквизиты</span>
                    <i class="icon-down"></i>
                </div>
                <div class="accordeon-box pf__ip-bank">

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
                </div>
                <div class="pf__data-title accordeon-title" data-accordeon=".pf__ip-user">
                    <span class="icon-user"></span>
                    <span class="title-text">Представитель</span>
                    <i class="icon-down"></i>
                </div>
                <div class="accordeon-box pf__ip-user">
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
                <div class="pf__data-title accordeon-title" data-accordeon=".pf__ip-contact">
                    <span class="icon-book"></span>
                    <span class="title-text">Контакты</span>
                    <i class="icon-down"></i>
                </div>
                <div class="accordeon-box pf__ip-contact">

                    <div class="pf__form">
                        <div class="pf__form-item pf__ip-phone">
                            <div class="pf__form-lvl">Телефон</div>
                            <div class="pf__form-value">
                                <input type="text" placeholder="+ 7 (       )" value="">
                            </div>
                        </div>
                        <div class="pf__form-item pf__ip-email">
                            <div class="pf__form-lvl">E-mail</div>
                            <div class="pf__form-value">
                                <input type="text" placeholder="Введите электронный адрес ..." value="">
                            </div>
                        </div>
                        <div class="pf__form-item pf__ip-site">
                            <div class="pf__form-lvl">Сайт</div>
                            <div class="pf__form-value">
                                <input type="text" placeholder="http://" value="">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="pf__data-title accordeon-title" data-accordeon=".pf__data-docs">
                    <span class="icon-docs"></span>
                    <span class="title-text">Документы</span>
                    <i class="icon-down"></i>
                </div>
                <div class="accordeon-box pf__data-docs">
                    <div class="pf__docs-list">
                        <div class="pf__docs-item">
                            <div class="pf__docs-icon"><span class="file pdf">pdf</span></div>
                            <div class="pf__docs-name">Свидетельство ИНН </div>
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
                            <div class="pf__docs-icon"><span class="file jpeg">jpeg</span></div>
                            <div class="pf__docs-name">Справка об открытии расчётного счёта</div>
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
                            <div class="pf__docs-icon"><span class="file png">png</span></div>
                            <div class="pf__docs-name">Документ, подтверждающий полномочия представителя юридического
                                лица на заключение Договора</div>
                            <div class="pf__docs-info">
                                <input type="file" class="input-doc-file">
                                <div class="name">
                                    Scan-0345.pdf
                                </div>
                                <div class="date">14.02.2022</div>
                                <div class="tag"><span class="tag-check">На проверке</span></div>
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
                            <div class="pf__docs-name">Свидетельство ОГРН</div>
                            <div class="pf__docs-info">
                                <input type="file" class="input-doc-file">
                                <div class="progress">
                                    <div class="progress-name">
                                        Scan-0345.pdf
                                    </div>
                                    <div class="progress-value">
                                        43%
                                    </div>
                                    <div class="progress-line">
                                        <div style="width:43%"></div>
                                    </div>

                                </div>

                            </div>
                            <div class="pf__docs-btns">
                                <button class="btn btn-transparent icon-download dd-btn download-file"></button>
                            </div>
                        </div>
                        <div class="pf__docs-item pf__docs-item-error">
                            <div class="pf__docs-icon"><span class="file jpg">jpg</span></div>
                            <div class="pf__docs-name">Устав юридического лица </div>
                            <div class="pf__docs-info">
                                <input type="file" class="input-doc-file">
                                <div class="progress ">
                                    <div class="progress-name">
                                        Scan-0345.pdf
                                    </div>
                                    <div class="progress-value">
                                        Ошибка загрузки
                                    </div>
                                    <div class="progress-line">
                                        <div style="width:43%"></div>
                                    </div>

                                </div>

                            </div>
                            <div class="pf__docs-btns">
                                <button class="btn btn-transparent icon-download dd-btn download-file"></button>
                            </div>
                        </div>
                        <div class="pf__docs-item pf__docs-item-error">
                            <div class="pf__docs-icon"><span class="file pdf">pdf</span></div>
                            <div class="pf__docs-name">Решение (протокол)<br /> о назначении исполнительного органа
                            </div>
                            <div class="pf__docs-info">
                                <input type="file" class="input-doc-file">
                                <div class="name">
                                    Scan-0345.pdf
                                </div>

                                <div class="tag"><span class="tag-error">Отклонен</span></div>
                                <div class="text">Слишком низкое разрешение файла</div>
                            </div>
                            <div class="pf__docs-btns">
                                <button class="btn btn-transparent icon-download dd-btn download-file"></button>
                            </div>
                        </div>
                        <div class="pf__docs-item pf__docs-item-nofile">
                            <div class="pf__docs-icon"><span class="nofile"></span></div>
                            <div class="pf__docs-name">Выписка из ЕГРЮЛ </div>
                            <div class="pf__docs-info"> <input type="file" class="input-doc-file" value=""></div>
                            <div class="pf__docs-btns">
                                <button class="btn btn-transparent icon-download download-file">Загрузить
                                    документ</button>
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