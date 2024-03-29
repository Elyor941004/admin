<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormContextSupportPromotion */

$this->title = 'Update Form Context Support Promotion: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Form Context Support Promotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-context-support-promotion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
