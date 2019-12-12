<?php
namespace app\controllers;
use yii\helpers\Url;
use app\models\AboutStudioContent;
use app\models\OurAdvantages;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\SiteInformation;
use app\models\GeneralContent;

?>
<section id="sectionrazrabotkasayt" style="margin-top: 120px;">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 ">
                <h1 style="font-weight: bold; color: #1b1e21;">Создание сайтов</h1>
                <a href="#" class="btn  ml-3 ml-3 mt-md-0 mt-3">Интернет-магазины</a>
                <a href="#" class="btn  ml-3 ml-3 mt-md-0 mt-3">Лендинг пейдж</a>
                <a href="#" class="btn  ml-3 ml-3 mt-md-0 mt-3">Коммeрчискии сайт</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12" style="word-break: break-word">
                <h3 style="color: #1b1e21; font-weight: bold; text-align: center;"><?=$makingsites->name?></h3>
                <div>
                    <span style="color: #303030;"><?=$makingsites->text?> </span>
                    <a href="../razrabotka_crm/">crm системы</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sectionrazrabotkasayt2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper">
                    <h3>Каким должен быть хороший сайт?</h3>
                </div>
            </div>
        </div>
        <div class="row mt-2 justify-content-center">
            <?php foreach ($sitecontents as $contents):?>
                <div class="col-md-4 " style="word-break: break-word">

                    <?=Html::img(Url::to('@web/uploads/makingsites/'.$contents->poto), ['alt' => 'My logo', 'width'=>40]);?>
                    <div>
                        <h3 class="afterbottom"><?=$contents->name?></h3>
                    </div>
                    <div>
                        <p><?=$contents->text?></p>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>

</section>
<section id="sectionrazrabotkasayt3">
    <div class="container mt-4 pt-3">
        <div class="row">
            <div class="col-md-12">
                <h3 style="color: rgba(0,0,0,0.9); font-weight: 700;">Преимущества сайтов, разработкой которых
                    занимается наша компания:</h3>
            </div>
        </div>

        <div class="row mt-3 justify-content-center">
            <?php foreach ($sitecontent as $content): ?>
                <div class="col-md-5">
                    <div>
                        <img src="<?=Url::to('@web/uploads/makingsites/'.$content->poto)?>" height="84" width="84" style="display: inline-block;"/>
                        <p style="color: #1b1e21; font-weight: 700; display: inline-block; margin-left: 7px;"><?=$content->name?>:</p>
                    </div>
                    <ul class="list-unstyled mt-2">
                        <li><?=$content->text?></li>
                    </ul>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<section id="sectionrazrabotkasayt4">
    <div class="container mt-4 pt-4 pb-2">
        <div class="row">
            <div class="col-md-12">
                <h3 style="color: rgba(0,0,0,0.9); font-weight: 700;" class="mt-2">Мы гарантируем:</h3>
            </div>
        </div>

        <div class="row mt-3 pl-0 pr-0 justify-content-center">
            <?php foreach ($generalcontents as $generalcontent):?>
                <div class="col-md-6">
                    <ul class="list-unstyled mt-2">
                        <li><?=$generalcontent->text?></li>
                    </ul>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</section>

<section id="sectionrazrabotkasayt5">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <p style="color: #303030; text-align: left;"><?=$generaltext->text?></p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <h3 style="color: rgba(0,0,0,0.9); font-weight: 700;">Какие сайты мы создаем:</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ($ouradvantages as $advantages):?>
                <div class="col-md-6 p-2 pl-0">
                    <img src="../img/shablon/thematics_ic_3.png" height="70" width="70"/>
                    <a href="<?=$advantages->name?>"><?=$advantages->text?></a>
                </div>
            <?php endforeach?>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h3 style="font-weight: 700; color: rgba(0,0,0,0.9);">Стоимость создания сайтов</h3>
                <p style="color: #303030;">В зависимости от назначения и сложности проекта стоимость разработки сайта может варьироваться</p>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <?php foreach ($pricesites as $prices): ?>
                <div class="col-md-4 " style="word-break: break-word; text-align:center">
                    <div class="border border-silver " style="padding: 14px;">
                        <h2 style="color: rgba(0,0,0,0.9); font-weight: 700;">
                            <?=$prices->title?></h2>
                        <div style="margin-top: 60px!important;">
                            <span style="display: inline-block; color: rgba(0,0,0,0.9); font-weight: 700;">от</span>
                            <h2  style="display: inline-block; color: rgba(0,0,0,0.9); font-weight: 700;"><?=$prices->price?></h2>
                            <span  style="display: inline-block; color: rgba(0,0,0,0.9); font-weight: 700;">руб.</span>
                        </div>
                        <h4 style="font-weight: 700; color: rgba(0,0,0,0.9);"><?=$prices->name?></h4>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-12">
                <h2 style="color: rgba(0,0,0,0.9); font-weight: 700;"><a href="#" style="text-transform: uppercase;">Посмотреть портфолио</a></h2>
            </div>
        </div>

    </div>

</section>