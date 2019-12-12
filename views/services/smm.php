<?php
namespace app\controllers;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\SiteContents;
use app\models\OurAdvantages;
use app\models\GeneralContent;

?>
<section id="sectionsmm">
    <div class="container mt-5">
        <div class="row mt-5 text-center">
            <div class="col-md-12 mt-5">
                <h1 style="color: rgba(0,0,0,0.9); font-weight: 700;" class="mt-5">SMM</h1>
                <p style="color: rgba(0,0,0,0.9); font-weight: 600;">
                    <?= $ouradvantage->name?>
                </p>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <p style="color: black;">
                    <?= $ouradvantage->text?>
                </p>
            </div>
        </div>
    </div>

</section>
<section id="services" class="bg-white o_nas">
    <div class="container">

        <header class="section-header wow fadeInUp">
            <h3>Система продвижения SMM актуальна при:</h3>
            <!--<p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>-->
        </header>

        <div class="row mt-5 justify-content-center">
            <? $a=0;?>
            <?php foreach ($ouradvantages as $contents): $a++?>
                <div class="col-lg-4 col-md-6 box wow bounceInUp nash_icon<?=$a?>" data-wow-duration="1.4s" style="text-align:center">
                    <!--<div class="icon"><i class="ion-ios-analytics-outline"></i></div>-->
                    <h4 class="title"><a href=""><?= $contents->name?></a></h4>
                    <p class="description"><?= $contents->text?></p>
                </div>
            <?php endforeach;?>
        </div>

    </div>
</section><!-- #services -->
