<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head.php';
?>
<div class="bg-gray">
    <div class="wrapper">
       
        <h3>Попапы</h3>
        <a class="mbox" href="#mlog">Окно регистрации/авторизации</a>
    </div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>
<div class="mlog modal" id="mlog">
	
	<div class="mlog__tab">
		<a href="" data-id="1" class="active">Вход</a>
		<a href="" data-id="2">Регистрация</a>
	</div>
    <!--Авторизация -->
    <div class="mlog__block" data-id="1">
        <div class="mlog__v-tab">
            <a href="" data-id="11" class="active">E-mail</a>
            <a href="" data-id="12">Телефон</a>
        </div>
        <div class="mlog__v-box" data-id="11">
        <form action="#" class="mlog__form">
				<div class="mlog__form-item">
					<div class="mlog__form-val ic-input icon-email error">
						<input type="text"  value="" placeholder="Введите e-mail ..."/>
					</div>
                    <div class="mlog__form-error">
						Ошибка
					</div>
				</div>
				<div class="mlog__form-item">
                    <div class="mlog__form-val ic-input icon-key">
						<input type="password"  value="" placeholder="Введите пароль"/>
                        <span class="icon-eye"></span>
					</div>
				</div>

                <div class="mlog__form-item">
					<div class="mlog__form-value form_checkbox">
                        <input type="checkbox" value="1" name="" id="system" checked>
                        <label for="system">Оставаться в системе</label>
                    </div>
				</div>
				<div class="mlog__form-bt">
					<button type="submit" class="btn"><span><span>Войти</span></span></button>
				</div>
			</form>
        </div>
        <div class="mlog__v-box hidden" data-id="12">
        Авторизация по почте
        </div>

        </div>
    </div>
    <!--Регистрация -->
    <div class="mlog__block hidden" data-id="2">

    </div>
</div>