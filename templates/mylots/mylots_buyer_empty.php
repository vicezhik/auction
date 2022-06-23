<?
include $_SERVER['DOCUMENT_ROOT'].'/include/head_auth.php';
?>
<div class="cars cars__mylots">
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li><a href=""><span class="icon-home"></span>Главная</a></li>
            <li><span>Мои ставки на аукционах</span></li>
        </ul>
        <div class="cars_title">
            <div class="cars_title-h1">
                 <h1>Мои ставки на аукционах</h1>
            </div>
        </div>
        

        <div class="crtop">
            <div class="crtop__bgs crtop__bgs-mylots crtop__bgs-select">
            
                     <div class="crtop__bgs-prev disabled"><i class="icon-arrow-dl "></i></div>
                <div class="crtop__bgs-scroll ">
                    <div class="crtop__bgs-select-title">Все лоты</div>
                    <div class="crtop__bgs-list crtop__bgs-list-mylots">
                        <div class="crtop__bgs-item active">
                            Все лоты
                        </div>
                        <div class="crtop__bgs-item title-desc">
                            На тограх
                        </div>
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Все</span>
                            <span class="title-mob">На тограх (Все)</span>
                        </div>
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Ставка лидирует</span>
                            <span class="title-mob">На тограх (Ставка лидирует)</span>
                        </div>
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Ставка перебита</span>
                            <span class="title-mob">На тограх (Ставка перебита)</span>
                        </div>
                        <div class="crtop__bgs-item title-desc">
                            Завершенные
                        </div> 
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Все</span>
                            <span class="title-mob">Завершенные (Все)</span>
                        </div>
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Победившие</span>
                            <span class="title-mob">Завершенные (Победившие)</span>
                        </div>
                        <div class="crtop__bgs-item crtop__bgs-radio">
                            <span class="radio"></span>
                            <span class="title-desc">Проигранные</span>
                            <span class="title-mob">Завершенные (Проигранные)</span>
                        </div>
                    </div>
                </div>
                <div class="crtop__bgs-next disabled"><i class="icon-arrow-dr"></i></div>
          
               
            </div>
            <div class="crtop__delim"></div>

            <div class="crtop__search "><div class="ic-input icon-search"><input type="text" placeholder="Поиск по VIN или №лота ..."/></div></div>
            <div class="crtop__grid">
                <button class="crtop__grid-grid icon-grid active" data-view="grid"></button>
                <span class="delim"></span>
                <button class="crtop__grid-list icon-list" data-view="list"></button>
            </div>

        </div>
        <div class="crlist-empty">
           <div>
                <img src="/i/bids-empty.svg" alt="">
                <p>У вас пока нет ставок</p>
           </div> 
        </div>
    </div>

</div>
<?
include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>