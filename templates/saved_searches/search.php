<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head_auth.php';
?>
<div class="searches">
    <div class="wrapper">

        <div class="cars_title">
            <div class="cars_title-h1">
                <h1>Мои фильтры</h1>
            </div>
            <div class="cars__mylots-btn "><a class="btn btn-green icon-bid-active">Мои лоты</a></div>
        </div>
        <div class="schbox">
            
            <div class="schlist">
                <div class="schitem form_checkbox">
                        <input type="checkbox" value="1" name="" id="search_1" checked>
                        <label for="search_1">Фильтр - 1</label>
                        <div>Chevrolet, Год выпуска: от 2016, Седан, Бензин, Полный, Пробег до 100 000 км</div>
                </div>
                <div class="schitem form_checkbox">
                        <input type="checkbox" value="3" name="" id="search_2">
                        <label for="search_2">Фильтр - 2</label>
                        <div>Chevrolet, Год выпуска: от 2016, Седан, Бензин, Полный, Пробег до 100 000 км</div>
                </div>
                <div class="schitem form_checkbox">
                        <input type="checkbox" value="3" name="" id="search_3" checked>
                        <label for="search_3">Фильтр - 3</label>
                        <div>Chevrolet, Год выпуска: от 2016, Седан, Бензин, Полный, Пробег до 100 000 км</div>
                </div>
            </div>
            <div class="schactions">
               <button class="btn btn-transparent icon-edit schitem-edit">Редактировать</button>
               <button class="btn btn-transparent icon-delete schitem-delete">Удалить</button>
            </div>
        </div>
        
    </div>

</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>