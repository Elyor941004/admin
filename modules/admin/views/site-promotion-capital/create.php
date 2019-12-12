<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SitePromotionCapital */

$this->title = 'Create Site Promotion Capital';
$this->params['breadcrumbs'][] = ['label' => 'Site Promotion Capitals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-promotion-capital-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
