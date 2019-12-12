<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ToOrder */

$this->title = 'Create To Order';
$this->params['breadcrumbs'][] = ['label' => 'To Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="to-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
