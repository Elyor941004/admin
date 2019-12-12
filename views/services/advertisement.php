<?php
namespace app\controllers;
use yii\helpers\Url;
use app\models\AboutStudioContent;
use app\models\OurAdvantages;
use yii\helpers\Html;
use yii\grid\GridView;

?>
<section id="sectionkontekstreklama">
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 style="color: rgba(0,0,0,0.9); font-weight: 700; text-transform: uppercase;"><span
                        style="color: #f7941e;">Контекстная</span> реклама</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12 justify-content-center" style="word-break: break-word">
                <p><?php foreach ($generalcontent as $content):?>
                    <?=$content->text?></p>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<section id="sectionkontekstreklama2">
    <div class="container">
        <div class="row text-center pt-3">
            <div class="col-md-12 col-12">
                <h3 style="color: rgba(0,0,0,0.9); font-weight: 700;" class="mt-3">Этапы работы</h3>
            </div>
        </div>
        <div class="row text-center justify-content-center " style="margin-top: 60px;">
            <? $a=0;?>
            <?php  foreach ($generalcontents as $contents): $a++; ?>
                <div class="col-md-3 ml-5" style="word-break: break-word">
                    <div class=" podderjkasayt<?=$a?> ">
                        <img src="../img/shablon/bg_step_icons.png" height="78" width="78"/></div>
                    <p style="color: #303030; text-align: center;" class="mt-4">
                        <?=$contents->text?>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</section>