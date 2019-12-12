<?php  use app\assets\AdminAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

 AdminAsset::register($this);

 ?>

<?php $this->beginPage()?>
<!doctype html>
<html lang="en">
<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,">
    <?php $this->registerCsrfMetaTags() ?>
    <!-- Required meta tags -->
    <!-- Bootstrap CSS -->
    <title>Admin panel</title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../">Главная</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Yii::$app->user->identity->username</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#">
                                 <?=Html::beginForm(['/admin/default/logout'], 'post')
                            . Html::submitButton(
                            '<i class="fas fa-power-off mr-2"></i>Logout',
                            ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm();?>

                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom: 200px; padding-right: 25px">
                    <a class="d-xl-none d-lg-none" href="">Панель администратора</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
<!-- Главная страница   -->  <li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i>Главная страница</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li>
                                            <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Главная меню</a>
                                        <div id="submenu-1-1" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="http://elitesstudio/admin/menu">Меню</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="http://elitesstudio/admin/sub-menu">Подменю</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="http://elitesstudio/admin/to-order">Заказать</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="http://elitesstudio/admin/phone-number">Телефон номер</a>
                                                </li>
                                            </ul>
                                        </div>
                                        </li>
<!-- Содержание  -->                       <li class="nav-item">
                                            <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Содержание</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="http://elitesstudio/admin/">Influencer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="http://elitesstudio/admin/">Influencer Finder</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="http://elitesstudio/admin/">Influencer Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
<!-- Обший нижний колонтитул -->            <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-3" aria-controls="submenu-1-3"><i class="fa fa-fw fa-rocket"></i>Обший нижний колонтитул</a>
                                            <div id="submenu-1-3" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="http://elitesstudio/admin/main-footer">Главная нижний колонтитул</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="http://elitesstudio/admin/main-footer">Главная нижний колонтитул сообшения</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="http://elitesstudio/admin/footer">Нижний колонтитул</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
<!-- Страница о студии   -->    <li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Страница о студии</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/about-studio-content">О студии <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/our-advantages">Наши преимущества</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/about-studio">Наши достижения</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                                        
<!--*Страница отзывы о нас  --> <li class="nav-item">
                                <a class="nav-link" href="http://elitesstudio/admin/reviews-about-us" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Страница отзывы о нас</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                </div>
                            </li>
<!--*Страница наша команда  --> <li class="nav-item ">
                                <a class="nav-link" href="http://elitesstudio/admin/our-team" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Страница наша команда</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                </div>
                            </li>
<!--*Страница наша партнеры  --><li class="nav-item">
                                <a class="nav-link" href="http://elitesstudio/admin/our-partners" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Страница наша партнеры</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                </div>
                            </li>
<!-- Страница вакансии  -->     <li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>Страница вакансии </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/vacancies">Вакансии</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/subvacancies">Подвакансии</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content">Условия</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/adress">Адрес</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
<!-- Страница создания сайтов --><li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Страница создания сайтов <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/our-advantages">создания сайтов</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/site-contents">Каким должен быть хороший сайт?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/site-contents">Преимущества наших сайтов</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content">При разработке сайтов мы гарантируем</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content">Создание сайтов техт</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/our-advantages">Какие сайты мы создаем</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/pricesites">Стоимость создания сайтов</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
<!-- Страница контекстная реклама --><li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11"><i class="fas fa-f fa-folder"></i>Страница контекстная реклама</a>
                                <div id="submenu-11" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content">Контекстная реклама</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content">Этапы работы</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
<!-- Страница SMM -->       <li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-12" aria-controls="submenu-12"><i class="fas fa-f fa-folder"></i>Страница SMM</a>
                                <div id="submenu-12" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/our-advantages">SMM</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/our-advantages">Система продвижения SMM актуальна при:</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
  <!-- Страница SEO -->     <li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-13" aria-controls="submenu-13"><i class="fas fa-f fa-folder"></i>Страница SEO</a>
                                <div id="submenu-13" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content">Жирный техт SEO</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content">техт SEO</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/our-advantages"> Мы предоставляем своим клиентам:</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content"> Нижный техт SEO</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

<!-- Страница проекты сайта --><li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-14" aria-controls="submenu-14"><i class="fas fa-f fa-folder"></i>Страница проекты сайта</a>
                                <div id="submenu-14" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content">Страница проекты контент</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/site-contents">Страница проекты сайти</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> 
<!--*Страница цены на услуги компании--><li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-15" aria-controls="submenu-15"><i class="fas fa-f fa-folder"></i>Страница цены на услуги компании</a>
                                <div id="submenu-15" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/services">Сервиси компании</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/sub-services">цены и информации на услуги компании</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
<!--Страница контакты -->               <li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-16" aria-controls="submenu-16"><i class="fas fa-f fa-folder"></i>Страница контакты</a>
                                <div id="submenu-16" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/phone-number">Номер контакты Asian group </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/site-contents">О контакты Asian group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content">О место офиса</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/to-order">Отправит сообшения</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="http://elitesstudio/admin/general-content">Реквизиты</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
<!--Заказат-->                  <a class="nav-link" href="http://elitesstudio/admin/order" data-target="#submenu-16" aria-controls="submenu-16"><i class="fas fa-f fa-folder"></i> Заказат</a>

                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <?=$content?>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>