<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OurPartners */

$this->title = 'Update Our Partners: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Our Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="our-partners-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
