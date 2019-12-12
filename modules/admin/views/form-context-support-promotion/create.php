<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormContextSupportPromotion */

$this->title = 'Create Form Context Support Promotion';
$this->params['breadcrumbs'][] = ['label' => 'Form Context Support Promotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-context-support-promotion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
