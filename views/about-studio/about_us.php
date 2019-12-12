<?php
namespace app\controllers;
use yii\helpers\Url;
use app\models\AboutStudioContent;
use app\models\OurAdvantages;
use yii\helpers\Html;
use yii\grid\GridView;
use app\assets\TemplateAsset;

?>
<section id="sectiononas" style="margin-top: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color: #f7931e;">О нас</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <a href="<?=Url::to('about_us') ?>" class="btn btn btn_info_1 mt-md-0 mt-2">О нас</a>
                <a href="<?=Url::to('commands') ?>" class="btn mt-md-0 mt-2">Наша команда</a>
                <a href="<?=Url::to('partners') ?>" class="btn mt-md-0 mt-2">Наши партнeры</a>
                <a href="<?=Url::to('reviews') ?>" class="btn mt-md-0 mt-2">Отзывы</a>
                <a href="<?=Url::to('vacancies') ?>" class="btn mt-md-0 mt-2">Вакансии</a>
            </div>
        </div>
    </div>
</section>

<section id="sectiononas2">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="<?=Url::to('@web/uploads/aboutstudio/'.$aboutstudio->photo); ?>" height="288" width="333"/>
            </div>
            <div class="col-md-8">
                <div class="about_text">Студия интернет-решений <span style="font-weight: bold; color: #1b1e21;">«ELiTES»</span>
                    <?=$aboutstudio->text; ?>
                </div>
            </div>

        </div>
    </div>


</section>

<section id="services" class="bg-white mt-3 o_nas">
    <div class="container">

        <header class="section-header wow fadeInUp">
            <h3>О нас</h3>
        </header>

        <div class="row mt-5">

            
                <div class="col-lg-4 col-md-6 box wow bounceInUp nash_icon<?=$a?>" data-wow-duration="1.4s" style="word-break: break-word">
                    <h4 class="title"><a href=""><?= $a1->photo;?></a></h4>
                    <p class="description">
                       
                    </p>
                </div>
        </div>

    </div>
</section>