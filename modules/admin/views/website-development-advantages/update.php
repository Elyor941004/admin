<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WebsiteDevelopmentAdvantages */

$this->title = 'Update Website Development Advantages: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Website Development Advantages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="website-development-advantages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
