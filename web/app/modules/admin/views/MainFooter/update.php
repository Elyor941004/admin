<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MainFooter */

$this->title = 'Update Main Footer: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Main Footers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="main-footer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
