<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ToOrder */

$this->title = 'Update To Order: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'To Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="to-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
