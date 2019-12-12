<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubServices */

$this->title = 'Create Sub Services';
$this->params['breadcrumbs'][] = ['label' => 'Sub Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
