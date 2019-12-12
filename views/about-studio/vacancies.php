<?php
use yii\helpers\Url;
use app\models\Vacancies;
use yii\helpers\Html;
use app\models\Subvacancies;
use app\models\OurAdvantages;
use app\models\UploadedFile;
use app\models\GeneralContent;
use app\models\Adress;

?>
<section id="sectionvakansii" style="margin-top: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color: #f7931e;">Вакансии</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <a href="<?=Url::to('about_us') ?>" class="btn  mt-md-0 mt-2">О нас</a>
                <a href="<?=Url::to('commands') ?>" class="btn mt-md-0 mt-2">Наша команда</a>
                <a href="<?=Url::to('partners') ?>" class="btn mt-md-0 mt-2">Наши партнeры</a>
                <a href="<?=Url::to('reviews') ?>" class="btn mt-md-0 mt-2">Отзывы</a>
                <a href="<?=Url::to('vacancies') ?>" class="btn btn btn_info_1 mt-md-0 mt-2">Вакансии</a>
            </div>
        </div>
        <div class="row mt-4 ">
            <? $a=0;?>
            <?php foreach ($vacancies as $vacancy): $a++;?>
                <div class="col-md-3 my-2 colborder " style="word-break: break-word; text-align: center">
                    <div class="vakansiicon1 text-center">
                        <img src="../img/shablon/bg_step_icons.png" height="70" width="70"/>
                    </div>
                    <h3><?=$vacancy->profession?></h3>
                    <ul style="text-align-center">requirement
                        <?php foreach ($vacancy->subvacancies as $subvacancy) :?>
                            <li  style="word-break: break-word"><?=($subvacancy->requeriments);?></li>
                        <?php  endforeach  ?>
                    </ul>
                    <div class="text-center">
                        <button type="button" class="btn text-center text-white bg-warning">Хочу работать</button>
                    </div>
                </div>
            <?php  endforeach  ?>
        </div>
        <div class="row mt-3">
            <div class="col-md-12" >
                <h3 style="color: rgba(0,0,0,0.9); font-weight: bold;">Условия</h3>
                <ol><?php foreach ($generalcontent as $content): ?>
                        <li><?=$content->text;?></li>
                    <?php endforeach ?>
                    <br>
                    <p></p><?= $adress->adress;?></p>
                    <a href="<?=$adress->link_adress?>">Показать на карте</a></li>

                </ol>

            </div>
        </div>
    </div>
</section>