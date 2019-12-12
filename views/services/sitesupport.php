<?php
namespace app\controllers;
use yii\helpers\Url;
use app\models\AboutStudioContent;
use app\models\OurAdvantages;
use yii\helpers\Html;
use yii\grid\GridView;

?>
<section id="sectionkontekstreklamaa" style="margin-top: 120px;">
    <div class="container mt-5">
        <<div class="row text-center">
            <div class="col-md-12">
                <h2 style="color: rgba(0,0,0,0.9); font-weight: 700; text-transform: uppercase;"><span
                        style="color: #f7941e;">Поддержка</span> сайта</h2>
                <?php foreach ($generalcontent as $content): ?>
                    <p style="color: #303030; text-align: left;">

                        <?=$content->text?>
                    </p>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<section id="sectionpodderjkasayta">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h3 style="color: rgba(0,0,0,0.9); font-weight: 700;" class="mt-3">Этапы работы</h3>
            </div>
        </div>
        <div class="row text-center mt-5 justify-content-center">
            <? $a=0;?>
            <?php foreach ($generalcontents as $contents): $a++?>
                <div class="col-md-3 mt-4" style="word-break: break-word">
                    <div class="podderjkasayt<?=$a?>">
                        <!--<img src="../img/shablon/support_step_icons.png" height="350" width="70"/>-->

                        <img src="../img/shablon/bg_step_icons.png" height="78" width="78"/></div>
                    <!--<img src="../img/shablon/support_step_icons.png" height="350" width="70"/>-->
                    <p class="mt-4"><?=$contents->text?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
