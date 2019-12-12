<?php
namespace app\controllers;
use yii\helpers\Url;
use app\models\AboutStudioContent;
use app\models\OurAdvantages;
use yii\helpers\Html;
use yii\grid\GridView;

?>
<section id="sectionproyect">
    <div class="container-fluid">
       <div class="row"> 
            <div class="col-md-6">
                <h3><?=$generalcontent->text?></h3>
                <div class="text-center">
                    <a href="../разработкасайт/razrabotkasayt.html" class="btn bg-white">Разработка сайтов</a>
                </div>
            </div>
            <?php foreach ($sitecontents as $contents):?> 
            <div class="col-md-3 p-0">
                <img src="<?=Url::to('@web/uploads/makingsites/'.$contents->poto)?>" alt="Avatar" class="image" style="width:100%; height: 100%;" height="345"/>
                <div class="overleyproyect">
                    <div class="text">
                        <h3><a><?=$contents->name?></a></h3>
                        <p><?=$contents->text?></p>
                        <a href="https://www.<?=$contents->name?>" class="btn" style="padding: 4px 14px;">Подробнее</a>
                    </div>

                </div>
            </div>
            <?php endforeach?>
        </div>
    </div>
</section>