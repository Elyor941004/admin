<?php
use yii\helpers\Url;
use app\models\OurPartners;
use yii\helpers\Html;
?>


<section id="sectionPartnyor">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color: #f7931e;">Наши партнeры</h1>
            </div>
        </div>
        <div class="row mt-3 text-center">
            <div class="col-md-12">
                <a href="<?=Url::to('about_us') ?>" class="btn mt-md-0 mt-2">О нас</a>
                <a href="<?=Url::to('commands') ?>" class="btn mt-md-0 mt-2">Наша команда</a>
                <a href="<?=Url::to('partners') ?>" class="btn btn btn_info_1 mt-md-0 mt-2">Наши партнeры</a>
                <a href="<?=Url::to('reviews') ?>" class="btn mt-md-0 mt-2">Отзывы</a>
                <a href="<?=Url::to('vacancies') ?>" class="btn mt-md-0 mt-2">Вакансии</a>
            </div>
        </div>

        <div class="row mt-5 justify-content-center" >
            <?php foreach ($partners as $partner):?>
                <div class="col-md-3 ">
                    <div class="images">
                        <?=Html::img(Url::to('@web/uploads/ourpartners/'.$partner->photo), ['alt' => 'My logo', 'width'=>200]);?>
                        <div class="text justify-content-center" style="word-break: break-word">
                            <p style="color: #1b1e21;">
                                <?=$partner->information;?>
                            </p>
                        </div>
                    </div>

                </div>
            <?php  endforeach  ?>
        </div>

    </div>
</section>