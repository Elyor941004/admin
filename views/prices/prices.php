<?php
namespace app\controllers;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

?>
<section id="sectionstoimost">
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12 text-uppercase">
                <h1 style="color: #f7941e;">Цены <span style="color: black;"> на услуги компании</span></h1>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-12">
                <a href="<?=Url::to('prices') ?>" class="btn btn_outline">Цены</a>
                <a href="<?=Url::to('action') ?>" class="btn btnadd ml-4">Акции</a>
            </div>
        </div>
    </div>
</section>
<section id="sectiontable">
    <div class="container">
        <div class="row mt-3 p-0">
            <div class="col-md-12 col-12 p-0">

                <!--<span><img src="../img/shablon/prices_icons.png" height="420" width="140"/></span>-->
                <!--<h2 class="afterelement ml-md-5 pl-md-5 ml-5 pl-5" id="elementroot">Создание и разработка сайтов</h2>-->
                <!--<div class="img2 d-inline-block">-->
                <!--<img src="../img/shablon/arrow-sprite.png"/>-->
                <!--</div>-->
                <button class="collapsible">Создание и разработка сайтов</button>
                <div class="content">
                    <div style="width: 100%;" class="oldtable">
                        Цены на лендинги
                    </div>
                    <table class="table-hover" style="width: 100%!important;">
                        <tr>
                            <td>Тариф</td>
                            <td><h3 style="color: rgba(0,0,0,0.9); text-transform: uppercase;">Landing<span style="color: #f7931e;">Mini</span></h3></td>
                            <td><h3 style="color: rgba(0,0,0,0.9); text-transform: uppercase;">Landing<span style="color: #f7931e;">Optima</span></h3></td>

                        </tr>
                        <tr>
                            <td>Система управления контентом</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Шаблонный дизайн</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                        </tr>
                        <tr>
                            <td>Цена</td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;">от </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;"> 60 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;"> руб</span> </td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;">от </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;"> 80 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;"> руб</span> </td>
                        </tr>
                        <tr>
                            <td>План работ может меняться в зависимости от индивидуалных по клиентаму</td>
                            <td></td>
                            <td></td>
                        </tr>

                    </table>
                    <div style="width: 100%;" class="oldtable mt-2">
                        Цены на создание сайтов
                    </div>
                    <table class="table-hover" style="width: 100%!important;">
                        <tr>
                            <td>Тариф</td>
                            <td><h3 style="color: rgba(0,0,0,0.9); text-transform: uppercase;">Сайт-<span style="color: #f7931e; font-size: 22px;">визитка</span><br> </h3><p style="color: rgba(0,0,0,0.9); margin-top: -20px;">(шаблонный дизайн)</p></td>
                            <td><h3 style="color: rgba(0,0,0,0.9); text-transform: uppercase;">Сайт-<span style="color: #f7931e; font-size: 22px;">визитка</span></h3><p style="color: rgba(0,0,0,0.9); margin-top: -20px;"> (уникальный дизайн)</p></td>
                            <td><h3 style="color: #f7931e; text-transform: uppercase;">Корпоративный<br><span style="color: rgba(0,0,0,0.9); font-size: 22px;"> сайт</span></h3></td>
                        </tr>
                        <tr>
                            <td style="font-weight: 700; font-size: 18px;">Стандартный набор разделов<br><p style="font-size: 14px; font-weight: normal;">
                                (Главная, О компании, Услуги, Контакты, Вакансии, Слайдер, Форма обратной связи, Поиск)
                            </p></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Шаблонный дизайн</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                        </tr>
                        <tr>
                            <td style="font-weight: 700; font-size: 18px;">Расширенный набор разделов<br><p style="font-size: 14px; font-weight: normal;">
                                (Новости, Отзывы, Фотогалерея, Голосование, Статьи)
                            </p></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Тестирование</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Управление тегами H1, title, мета-тегами</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Гарантия 1 год</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Цена</td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;">от </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;"> 100 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;"> руб</span> </td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;">от </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;"> 120 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;"> руб</span> </td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;">от </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;"> 300 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;"> руб</span> </td>
                        </tr>
                        <tr>
                            <td>План работ может меняться в зависимости от индивидуалных по клиентаму</td>
                            <td></td>
                            <td></td>
                        </tr>

                    </table>
                    <div style="width: 100%;" class="oldtable">
                        Цены на создание интернет-магазинов
                    </div>
                    <table class="table-hover" style="width: 100%!important;">
                        <tr>
                            <td>Тариф</td>
                            <td><h3 style="color: rgba(0,0,0,0.9); text-transform: uppercase;">Интернет-магазин <br><span style="color: #f7931e; font-size: 22px;">mini</span><br> </h3></td>
                            <td><h3 style="color: rgba(0,0,0,0.9); text-transform: uppercase;">интернет-магазин <br><span style="color: #f7931e; font-size: 22px;">optima</span></h3></td>
                            <td><h3 style="color: #f7931e; text-transform: uppercase;">Интернет-магазин <br><span style="color: rgba(0,0,0,0.9); font-size: 22px;"> maxi</span></h3></td>
                        </tr>
                        <tr>
                            <td style="font-weight: 700; font-size: 18px;">Стандартный набор разделов<br><p style="font-size: 14px; font-weight: normal;">
                                (Главная, Слайдер, О магазине, Доставка и оплата, Каталог, Карточка товара, Корзина, Контакты, Форма обратной связи, Новости,  Поиск)
                            </p></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Подключение систем оплаты</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Личный кабинет покупателя</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Сравнение</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                    </tr>
                        <tr>
                            <td>Избранное</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Фильтры каталога</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Рассылка</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                    </tr>
                        <tr>
                            <td>Интеграция с 1С</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Проектирование и разработка технического задания</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Верстка</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Программирование</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Тестирование</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Управление тегами H1, title, мета-тегами</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Гарантия 1 год</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Система управления контентом</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Цена</td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;">от </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;"> 250 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;"> руб</span> </td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;">от </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;"> 350 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;"> руб</span> </td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;">от </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;"> 450 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;"> руб</span> </td>
                        </tr>
                        <tr>
                            <td>План работ может меняться в зависимости от индивидуалных по клиентаму</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>


                </div>
            </div>
        </div>
        <div class="row mt-3">

            <div class="col-md-12 col-12 p-0">
                <button class="collapsible2">Продвижение сайтов</button>
                <div class="content2">
                    <div style="width: 100%;" class="oldtable">
                        Цены на продвижение
                    </div>
                    <table class="table-hover" style="width: 100%!important;">
                        <tr>
                            <td>Тариф</td>
                            <td><span style="color: #f7931e; font-size: 22px;"> Start</span></td>
                            <td><span style="color: #f7931e; font-size: 22px;">Optimal</span></td>
                            <td><span style="color: #f7931e; font-size: 22px;"> Exclusive</span></td>
                        </tr>
                        <tr>
                            <td>SEO - аудит сайта</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Работа с семантическим ядром</td>
                            <td><p>25-50 запросов</p></td>
                            <td><p>50-100 запросов</p></td>
                            <td><p>100 и более</p></td>
                        </tr>

                        <tr>
                            <td>Внутренняя оптимизация сайта</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Формирование ссылочной массы</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Поддержка</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Ежемесячная отчетность</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Цена</td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;"> от  </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;">  25 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;">  руб</span> </td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;"> от  </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;">  45 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;">  руб</span> </td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;"> от  </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;">  65 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;">  руб</span> </td>
                        </tr>
                        <tr>
                            <td>План работ может меняться в зависимости от индивидуалных по клиентаму</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 col-12 p-0">
                <button class="collapsible3">SMM</button>
                <div class="content3">
                    <div style="width: 100%;" class="oldtable">
                        Тарифы для роста продаж
                    </div>
                    <table class="table-hover" style="width: 100%!important;">
                        <tr>
                            <td>Что мы сделаем</td>
                            <td><h3 style="color: rgba(0,0,0,0.9); text-transform: uppercase;">Базовый</h3></td>
                            <td><h3 style="color: rgba(0,0,0,0.9); text-transform: uppercase;">Выгодный</h3></td>
                            <td><h3 style="color: rgba(0,0,0,0.9); text-transform: uppercase;">Турба</h3></td>
                        </tr>
                        <tr>
                            <td>Аудит продукта и конкурентрой среды</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Продайущее описание аккаунта</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Создание сообщества / группы / страницы инстаграм и фейсбук</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>

                        </tr>
                        <tr>
                            <td>Копирайт (информация о бренде)</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Наролнение контентом</td>
                            <td>12 постов</td>
                            <td>20 постов</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Stories</td>
                            <td>15 постов</td>
                            <td>20 постов</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>Настройка таргетированной рекламы </td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Росширение аудитории подписчиков сообщества (кол-во в месяц)</td>
                            <td>-100</td>
                            <td>-200/300</td>
                            <td>-400/500</td>
                        </tr>
                        <tr>
                            <td>Дизайн меню аватара</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Создание иконок для Highlights </td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Разработка конкурсных программ</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Добавление публикации в Highlights</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Разработка акционных предложений бренда</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Разработка опросов </td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Калаборация с блогерами </td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Создание и ведение телеграмм канала </td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Работа фотографа </td>
                            <td><i class="fa fa-remove"></i></td>
                            <td>1 час</td>
                            <td>2 часа</td>
                        </tr>
                        <tr>
                            <td>Анимационные гифки</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td>1 шт</td>
                            <td>3 шт</td>
                        </tr>
                        <tr>
                            <td>Прямой ефир</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td>1 раз в месяц</td>
                            <td>3 раза в месяц</td>
                        </tr>
                        <tr>
                            <td>Цена</td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;"> от  </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;">  25 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;">  руб</span> </td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;"> от  </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;">  45 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;">  руб</span> </td>
                            <td><span style="color: rgba(0,0,0,0.9); display: inline-block;"> от  </span> <h3 style="color: rgba(0,0,0,0.9); font-size: 22px; display: inline-block; font-weight: 700;">  65 000 </h3><span style="color: rgba(0,0,0,0.9); display: inline-block;">  руб</span> </td>
                        </tr>
                        <tr>
                            <td>План работ может меняться в зависимости от индивидуалных по клиентаму</td>
                            <td></td>
                            <td></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
