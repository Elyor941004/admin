<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'lib/bootstrap/css/bootstrap.min.css',
        'lib/font-awesome/css/font-awesome.min.css',
        'lib/animate/animate.min.css',
        'lib/ionicons/css/ionicons.min.css',
        'lib/owlcarousel/assets/owl.carousel.min.css',
        'lib/lightbox/css/lightbox.min.css',
        'css/style.css',
        'img/favicon.png',
        'img/apple-touch-icon.png',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet',
    ];
    public $js = [
        'lib/jquery/jquery.min.js',
        'lib/jquery/jquery-migrate.min.js',
        'lib/bootstrap/js/bootstrap.bundle.min.js',
        'lib/easing/easing.min.js',
        'lib/superfish/hoverIntent.js',
        'lib/superfish/superfish.min.js',
        'lib/wow/wow.min.js',
        'lib/waypoints/waypoints.min.js',
        'js/js/waypoints.min.js',
        'lib/counterup/counterup.min.js',
        'lib/owlcarousel/owl.carousel.min.js',
        'lib/isotope/isotope.pkgd.min.js',
        'lib/lightbox/js/lightbox.min.js',
        'lib/touchSwipe/jquery.touchSwipe.min.js',
        'contactform/contactform.js',
        'js/main.js',
    ];
    public $depends = [
       // 'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];
}
