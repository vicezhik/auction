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
            <div class="pf__progress-step active success"><span>2</span></div>
            <div class="pf__progress-line"></div>
            <div class="pf__progress-step active"><span>3</span></div>
        </div>
        <div class="pf__docs-box">
            <div class="pf__docs-title">
                <span class="icon-docs"></span>
                Документы
            </div>
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
                                <li><button class="btn btn-transparent icon-download download-file">Загрузить другой файл</button></li>
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
                            <div class="name">
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
                        <button class="btn btn-transparent icon-download download-file">Загрузить документ</button>
                    </div>
				</div>
            </div>
            <div class="pf__docs-text icon-info">Скачайте договор в верхнем углу страницы. Распечатайте и подпишите документ. Загрузите подписанный договор.</div>
        </div>
        <div class="pf__data-bt">
            <button class="btn btn-transparent icon-save save-draft">Сохранить как черновик</button>
            <button class="btn btn-white">Вернуться назад</button>
            <button class="btn btn-green">Создать профиль</button>
        </div>
        </div>
        
    </div>
</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>