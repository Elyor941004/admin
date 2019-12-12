<?php
use app\assets\TemplateAsset;
use yii\helpers\Html;use yii\helpers\Url;
use yii\widgets\ActiveForm;

TemplateAsset::register($this);
 ?>

<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BizPage Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
 <?php $this->head() ?>
    </head>

 <body>
    <?php $this->beginBody() ?>
    <header id="header" style="background-color: rgba(0,0,0,0.9);">
        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <h1><a href="<?=Url::to('../') ?>" class="scrollto">
                        <img src="../img/shablon/logo.png" height="50" width="50"
                             style="border-radius: 50%; margin-top: -7px;"/></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>
            <button type="button" id="zakazat" class="btn p-2 d-md-none d-block" onclick="openNavMobile()" style="color: #FFFFFF; background-color: rgba(0,0,0,0.9);">Заказат</button>

            <div id="myNavMobile" class="overlay text-center">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNavMobile()">x</a>
                <div class="overlay-content text-center">
                    <h3 class="text-center text-white" style="font-weight: bold;">Отправить заявку</h3>
                    <?= Html::beginForm([Url::to(['/order'])],'post', ['enctype' => 'multipart/form-data', 'id'=>"carformMobile"]); ?>


                        <?= Html::dropDownList('list', '', [
                        'Разработка сайта' => 'Разработка сайта',
                        'Продвижение сайта' => 'Продвижение сайта',
                        'Разработка CRM' => 'Разработка CRM',
                        'Другое' => 'Другое'
                    ]) ?>

                    <?= Html::textInput('name', '', ['placeholder'=>'Вашe имя','maxlength' => true]) ?>

                    <?= Html::textInput('phone', '', ['placeholder'=>'Телефон','maxlength' => true]) ?>

                    <?= Html::textarea('text', '', ['placeholder'=>'Текст сообщения','maxlength' => true]) ?>

                    <?= Html::fileInput('file', '', ['placeholder'=>'Прикрепить файл','maxlength' => true]) ?>

                    <div class="form-group ">
                        <?= Html::submitButton('Отправить заявку', ['class' => 'btn btn-primary_1']) ?>
                    </div>

                    <?= Html::endForm(); ?>
                </div>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="<?=Url::to('../') ?>">Главная страница</a></li>
                    <li class="menu-has-children"><a href="<?=Url::to('about_us') ?>">О студии</a>
                        <ul>
                            <li><a href="<?=Url::to('reviews') ?>">Отзывы</a></li>
                            <li><a href="<?=Url::to('commands') ?>">Наша команда</a></li>
                            <li><a href="<?=Url::to('partners') ?>">Наши партнеры</a></li>
                            <li><a href="<?=Url::to('vacancies') ?>">Вакансии</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="">Услуги</a>
                        <ul>
                            <li><a href="<?=Url::to('../services/makingsites') ?>">Создание и разработка сайтов</a></li>
                            <li><a href="<?=Url::to('../services/advertisement') ?>">Контекстная реклама</a></li>
                            <li><a href="<?=Url::to('../services/sitesupport') ?>">Поддержка сайта</a></li>
                            <li><a href="<?=Url::to('../services/smm') ?>">SMM</a></li>
                            <li><a href="<?=Url::to('../services/seo') ?>">SEO</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="<?=Url::to('../projects/developmentsites') ?>">Проeкты</a>
                    </li>
                    <li><a href="<?=Url::to('../prices/prices') ?>">Стоимость</a></li>
                    <li><a href="<?=Url::to('../contacts/contact') ?>">Контакты</a></li>
                    <li><a href="#"></a>
                        <button type="button" class="btn p-2" onclick="openNav()"
                                style="color: #FFFFFF; background-color: rgba(0,0,0,0.9); width: 150px; margin-top: -9px;">
                            Заказат
                        </button>
                    </li>
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                            <h3 class="text-center text-white" style="font-weight: bold;">Отправить заявку</h3>
                                <?= Html::beginForm([Url::to(['/order'])],'post', ['enctype' => 'multipart/form-data', 'id'=>"carformMobile"]); ?>


                                <?= Html::dropDownList('list', '', [
                                    'Разработка сайта' => 'Разработка сайта',
                                    'Продвижение сайта' => 'Продвижение сайта',
                                    'Разработка CRM' => 'Разработка CRM',
                                    'Другое' => 'Другое'
                                ]) ?>

                                <?= Html::textInput('name', '', ['placeholder'=>'Вашe имя','maxlength' => true]) ?>

                                <?= Html::textInput('phone', '', ['placeholder'=>'Телефон','maxlength' => true]) ?>

                                <?= Html::textarea('text', '', ['placeholder'=>'Текст сообщения','maxlength' => true]) ?>

                                <?= Html::fileInput('file', '', ['placeholder'=>'Прикрепить файл','maxlength' => true]) ?>

                                <div class="form-group ">
                                    <?= Html::submitButton('Отправить заявку', ['class' => 'btn btn-primary_1']) ?>
                                </div>

                                <?= Html::endForm(); ?>
                        </div>
                    </div>

                    <li><a href="#">+99 897 771 41 98</a></li>

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->
  <!--==========================
    Header
  ============================-->

  <!--==========================
    Intro Section
  ============================-->
  <?=$content?>
  <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3 style="font-size: 20px;">asiamarketing.uz</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet
                            proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Навигация</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="<?=Url::to('../') ?>" class="btn">Главное</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="<?=Url::to('about_us') ?>" class="btn">О нас</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="<?=Url::to('../services/makingsites') ?>">Портфолио</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="<?=Url::to('vacancies') ?>">Вакансия</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="<?=Url::to('../contacts/contact') ?>">Контакты</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Адрес</h4>
                        <p>
                            г.Ташкент, <br>
                            Яшнабадский р-н<br>
                            ул, Темура Малика 146 <br>
                            <strong>Тел:</strong> +998(97)771-41-98<br>
                            <strong>Email:</strong> Ruslan.asigroup@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Наша новостная рассылка</h4>
                        <p>
                            Он основан на большом количестве концессий и очень небольшом количестве экспорта магния.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
            </div>
            <div class="credits">
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
                <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "25%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    <script>
        function openNavMobile() {
            document.getElementById("myNavMobile").style.width = "100%";
        }

        function closeNavMobile() {
            document.getElementById("myNavMobile").style.width = "0%";
        }
    </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
