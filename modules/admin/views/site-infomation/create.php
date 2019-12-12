<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SiteInfomation */

$this->title = 'Create Site Infomation';
$this->params['breadcrumbs'][] = ['label' => 'Site Infomations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-infomation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
