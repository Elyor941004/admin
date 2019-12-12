<?php
use yii\helpers\Url;
use app\models\ReviewsAboutUs;
use yii\helpers\Html;

?>

<section id="otziv" style="margin-top: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color: #f7931e;">Отзывы о нас</h1>
            </div>
        </div>
        <div class="row mt-3 text-center">
            <div class="col-md-12">
                <a href="<?=Url::to('about_us') ?>" class="btn mt-md-0 mt-2">О нас</a>
                <a href="<?=Url::to('commands') ?>" class="btn mt-md-0 mt-2">Наша команда</a>
                <a href="<?=Url::to('partners') ?>" class="btn mt-md-0 mt-2">Наши партнeры</a>
                <a href="<?=Url::to('reviews') ?>" class="btn btn btn_info_1 mt-md-0 mt-2">Отзывы</a>
                <a href="<?=Url::to('vacancies') ?>" class="btn mt-md-0 mt-2">Вакансии</a>
            </div>
        </div>

        <div class="row mt-5 p-3 mb-3" style="background-color: #f1f1f1;">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="carousel slide" data-ride="carousel" id="demo">
                            <ul class="carousel-indicators mt-5">
                            <li class="active" data-slide-to="0" data-target="#newBookCarousel"></li>
                            <li data-slide-to="1"  data-target="#newBookCarousel"></li>
                            <li data-slide-to="2"  data-target="#newBookCarousel"></li>
                            </ul>
                            <div class="carousel-inner" id="carusellogo">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-3 offset-2" id="imglogo">
                                            <img src="../img/shablon/logo.png" class="img-fluid"/>
                                        </div>
                                        <div class="col-md-6 pl-0" style="margin-left: -35px;">
                                            <h2 class="mt-4" style="color: rgba(0,0,0,0.9); text-align: left;">Бурмакин А.Д.</h2>
                                            <span style="color: #303030; font-size: 18px;">Группа компаний «Шинторг», директор отдела интернет<br>-продаж</span><br>
                                            <a href="http://shintorg48.ru/" style="color: #f7931e; font-size: 16px;"><i>shintorg48.ru</i></a>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-8 offset-2">
                                            <p style="text-align: center; color: #1b1e21; margin-left: 50px;"><i>
                                                Мы, Группа компаний «Шинторг» обратились в Студию интернет-решений
                                                «ELiTES» с целью продвижения нашего сайта shintorg48.ru. У нас сеть
                                                магазинов, интернет-магазин и автосервисы в городах Липецк и Воронеж, но
                                                найти профессионалов высокого уровня в своем регионе нам не удалось.
                                                После неудачного опыта решили поискать компанию по продвижению сайтов в
                                                Москве. Из нескольких выбрали именно Студию интернет-решений «ELiTES» и
                                                остались очень довольны сотрудничеством. Уже через несколько месяцев
                                                работы, наш сайт занял ТОП-10 по приоритетным ключевым словам,
                                                увеличилось количество заказов.
                                            </i></p>
                                        </div>

                                    </div>
                                </div><?$a=0?>
                                <?php foreach ($reviews as $review):
                                $a++;?>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-md-3 offset-2" id="imglogo<?=$a?>">
                                          <?= Html::img(Url::to('@web/uploads/reviews/'.$review->photo), ['alt' => 'My logo', 'width'=>150]);?> 
                                        </div>
                                        <div class="col-md-6 pl-0" style="margin-left: -35px">
                                            <h2 class="mt-4" style="color: rgba(0,0,0,0.9); text-align: left;"></h2><?=$review->name;?></h2>
                                            <span style="color: #303030; font-size: 18px;"><?=$review->review;?></span><br>
                                            <a href="http://<?=$review->link_url;?>/" style="color: #f7931e; font-size: 16px;"><i><?=$review->link_url?></i></a>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-8 offset-2" style="word-break: break-word">
                                            <p style="text-align: center; color: #1b1e21; margin-left: 50px;"><i>
                                                    <?=$review->text;?>
                                            </i></p>
                                        </div>

                                    </div>
                                </div>
                                <?php endforeach ?>
                                  <a class="carousel-control-prev mt-5" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next mt-5" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


