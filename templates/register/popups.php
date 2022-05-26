<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
?>
<div class="bg-gray">
    <div class="wrapper">

        <h3>Попапы</h3>
        <a class="mbox" href="#mlog">Окно регистрации/авторизации</a><br>
        <a class="mbox" href="#mpassw">Придумайте пароль</a><br>
        <a class="mbox" href="#mcheck">Проверьте правильность номера телефона</a><br>
        <a class="mbox" href="#mcode">Отправили код</a><br>
        <a class="mbox" href="#msuccess">Ваш аккаунт успешно подтвержден</a>
    </div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>
<div class="mlog modal" id="mlog">
    <div class="mlog__inner">
        <div class="mlog__tab">
            <a href="" data-id="1" class="active">Вход</a>
            <a href="" data-id="2">Регистрация</a>
        </div>
        <!--Авторизация -->
        <div class="mlog__block" data-id="1">
            <div class="mlog__block-inner">
                <div class="mlog__v-tab">
                    <a href="" data-id="11" class="active">E-mail</a>
                    <a href="" data-id="12">Телефон</a>
                </div>
                <div class="mlog__v-box" data-id="11">
                    <div class="mlog__form">
                        <div class="mlog__form-item">
                            <div class="mlog__form-val ic-input icon-email error">
                                <input type="text" value="" placeholder="Введите e-mail ..." />
                            </div>
                            <div class="mlog__form-error">
                                Ошибка
                            </div>
                        </div>
                        <div class="mlog__form-item">
                            <div class="mlog__form-val ic-input icon-key">
                                <input type="password" value="" placeholder="Введите пароль" />
                                <span class="icon-eye"></span>
                            </div>
                        </div>

                        <div class="mlog__form-item mlog__form-insystem">
                            <div class="mlog__form-value form_checkbox">
                                <input type="checkbox" value="1" name="" id="system" checked>
                                <label for="system">Оставаться в системе</label>
                            </div>
                        </div>
                        <div class="mlog__form-bt">
                            <button type="submit" class="btn btn-green">Войти</button>
                        </div>
                        <div class="mlog__form-error-box">
                            1.Ошибка соеденения с сервером
                        </div>

                    </div>
                </div>
                <div class="mlog__v-box hidden" data-id="12">
                    <div class="mlog__form">
                        <div class="mlog__form-item">
                            <div class="mlog__form-val ic-input icon-phone">
                                <input type="text" value="" placeholder="+7 (         )" />
                            </div>
                        </div>
                        <div class="mlog__form-item mlog__form-insystem">
                            <div class="mlog__form-value form_checkbox">
                                <input type="checkbox" value="1" name="" id="system" checked>
                                <label for="system">Оставаться в системе</label>
                            </div>
                        </div>
                        <div class="mlog__form-bt">
                            <button type="submit" class="btn btn-green">Войти</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mlog__v-forget">
                Забыли пароль? <a href="" class="link-green">Восстановить</a>
            </div>

        </div>
        <!--Регистрация -->
        <div class="mlog__block hidden" data-id="2">
                <div class="mlog__form mlog__form-register">
                    <div class="mlog__form-item mlog__form-name">
                        <div class="mlog__form-val ic-input icon-user">
                            <input type="text" value="" placeholder="Введите Ваше полное имя" />
                        </div>
                    </div>
                    <div class="mlog__form-item mlog__form-email">
                        <div class="mlog__form-val ic-input icon-email">
                            <input type="text" value="" placeholder="Введите e-mail" />
                        </div>
                    </div>
                    <div class="mlog__form-item">
                        <div class="mlog__form-val ic-input icon-phone">
                            <input type="text" value="" placeholder="+ 7 (        )" />
                        </div>
                    </div>
                    <div class="mlog__form-item mlog__form-manager">
                        <div class="mlog__form-value">
                            <select name="manager" id="" data-placeholder="Ваш менеджер"
                                data-dropdown-parent=".mlog__form-manager">
                                <option></option>
                                <option value="1">Андрей</option>
                                <option value="2">Иван</option>
                            </select>
                        </div>
                    </div>
                    <div class="mlog__form-item ">
                        <div class="mlog__form-value mlog__form-yurstatus">
                            <select name="status" id="" data-placeholder="Юридичекий статус"
                                data-dropdown-parent=".mlog__form-yurstatus">
                                <option></option>
                                <option value="1">Статус 1</option>
                                <option value="2">Статус 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="mlog__form-item mlog__form-type">
                        <div class="mlog__form-r form_radio">
                            <input type="radio" id="seller" value="seller" checked name="type_user">
                            <label for="seller">Продавец</label>
                        </div>
                        <div class="mlog__form-r form_radio">
                            <input type="radio" id="buyer" value="buyer" name="type_user">
                            <label for="buyer">Покупатель</label>
                        </div>
                    </div>

                    <div class="mlog__form-bt">
                        <button type="submit" class="btn btn-green">Зарегистрироваться</button>
                    </div>

                </div>
                <div class="mlog__form-policy">
                    Нажимая кнопку “Зарегистрироваться” Вы приниматие <a href="">условия использования</a> и <a
                        href="">политику конфеденциальности</a>
                </div>
        </div>
    </div>
</div>
<div class="mlog modal" id="mpassw">
    <div class="mlog__inner">
        <div class="mlog__title">Придумайте пароль</div>
        <div class="mlog__form mlog__form-mpassw">
            <div class="mlog__form-item">
                <div class="mlog__form-val ic-input icon-key">
                    <input type="password" value="" placeholder="Введите пароль" />
                    <span class="icon-eye"></span>
                </div>
            </div>
            <div class="mlog__form-item">
                <div class="mlog__form-val ic-input icon-key">
                    <input type="password" value="" placeholder="Подтвердите пароль" />
                    <span class="icon-eye"></span>
                </div>
            </div>

            <div class="mlog__form-bt">
                <button type="submit" class="btn btn-green">Задать пароль</button>
            </div>
        </div>
        <div class="mlog__form-back">
            <a href="" class="btn btn-transparent icon-left-bold">Вернуться назад</a>
        </div>
    </div>

</div>
<div class="mlog modal" id="mcheck">
    <div class="mlog__inner">
        <div class="mlog__title">Проверьте правильность номера телефона</div>
        <div class="mlog__form">
            <div class="mlog__form-item mlog__form-phone-check">
                <div class="mlog__form-val ic-input icon-phone">
                    <input type="text" value="+ 7 (999) 888-66-33" placeholder="" />
                </div>
            </div>
            <div class="mlog__form-text">
                Вам будет выслан смс-код<br />для подтверждения регистрации
            </div>

            <div class="mlog__form-bt">
                <button type="submit" class="btn btn-green">Выслать код</button>
            </div>

        </div>
        <div class="mlog__form-back">
            <a href="" class="btn btn-transparent icon-left-bold">Вернуться назад</a>
        </div>
    </div>
</div>
<div class="mlog modal" id="mcode">
    <div class="mlog__inner">
        <div class="mlog__title">Мы выслали <br> смс-код на номер <span class="color-green">+ 7 (999) 888-66-33</span>
        </div>
        <div class="mlog__form">
            <div class="mlog__form-item mlog__form-code">
                <div class="mlog__form-val">
                    <input type="text" value="" placeholder="Введите код из смс" />
                </div>
            </div>


            <div class="mlog__form-bt">
                <button type="submit" class="btn btn-green">Войти</button>
            </div>
            <div class="mlog__form-repeat">
                <a href="" class="btn btn-transparent icon-email">Запросить код повторно</a>
            </div>

        </div>
        <div class="mlog__form-back">
            <a href="" class="btn btn-transparent icon-left-bold">Вернуться назад</a>
        </div>
    </div>
</div>
<div class="mlog modal" id="msuccess">
    <div class="mlog__inner">
        <div class="mlog__title">Ваш аккаунт <br>успешно подтвержден</div>
        <div class="mlog__form mlog__form-btns">
            <a href="" class="btn btn-green">Перейти к торгам</a>
            <a href="" class="btn btn-white">Пройти полную регистрацию</a>
        </div>
        <div class="mlog__form-info">
            <i class="icon-info"></i>
            Полная регистрация требуется для оформления договора, Вы уже можете приступить к торгам
        </div>
    </div>

</div>