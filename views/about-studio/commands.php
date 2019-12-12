<?php
use yii\helpers\Url;
use app\models\OurTeam;
use yii\helpers\Html;
?>

<section id="sectionKomanda">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color: #f7931e;">Наша команда</h1>
            </div>
        </div>
        <div class="row mt-3 text-center">
            <div class="col-md-12">
                <a href="<?=Url::to('about_us') ?>" class="btn mt-md-0 mt-2">О нас</a>
                <a href="<?=Url::to('commands') ?>" class="btn btn btn_info_1 mt-md-0 mt-2">Наша команда</a>
                <a href="<?=Url::to('partners') ?>" class="btn mt-md-0 mt-2">Наши партнeры</a>
                <a href="<?=Url::to('reviews') ?>" class="btn mt-md-0 mt-2">Отзывы</a>
                <a href="<?=Url::to('vacancies') ?>" class="btn mt-md-0 mt-2">Вакансии</a>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">


        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="kamandaimages">
                    <div class="row justify-content-center">
                        <?php
                        foreach ($ourteam as $team):
                            ?>
                            <div class="col-4 align-self-center">
                                <div class="testimonial-item text-align:center" style="word-break: break-word">
                                    <?=Html::img(Url::to('@web/uploads/ourteam/'.$team->photo), ['alt' => 'My logo', 'width'=>200]);?>
                                    <h3><?=$team->name?></h3>
                                    <h4><?=$team->profession?></h4>
                                </div>
                            </div>

                        <?php endforeach ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

