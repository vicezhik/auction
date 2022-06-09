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
                                <input type="radio" id="ip" value="ip" name="status">
                                <label for="ip">Индивидуальный предприниматель</label>
                            </div>
                            <div class="pf__form-r form_radio">
                                <input type="radio" id="fiz" value="fiz" checked name="status">
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
                                <input type="radio" id="seller" value="seller" name="type">
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
            <div class="pf__has">
                <div class="pf__has-title small">
                    <i class="icon-found"></i>Вы не можете создать такой тип профиля: <br> У вас уже есть профили
                    индивидуального предпринимателя
                </div>
                <div class="pf__has-list">
                    <div class="pf__has-item">
                        <div class="preview preview-img">
                            <img src="/i/profile-example.jpeg" alt="">
                            <span>И</span>
                        </div>
                        <div class="info"><span class="name">ИП Иванов Иван Иванович</span> <span
                                class="type">Продавец</span></div>
                        <div class="pf__status-user status"><span class="active">Активный</span></div>
                        <div class="actions"><a href="" class="btn btn-transparent icon-edit">Редактировать</a></div>
                    </div>
                    <div class="pf__has-item">
                        <div class="preview preview-img">
                            <span>И</span>
                        </div>
                        <div class="info"><span class="name">ИП Иванов Иван Иванович</span> <span
                                class="type">Продавец</span></div>

                        <div class="pf__status-user status"><span class="active">Активный</span></div>
                        <div class="actions"><a href="" class="btn btn-transparent icon-edit">Редактировать</a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>