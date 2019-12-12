<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Makingsites */

$this->title = 'Update Makingsites: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Makingsites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="makingsites-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
