<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subvacancies */

$this->title = 'Update Subvacancies: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Subvacancies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subvacancies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
