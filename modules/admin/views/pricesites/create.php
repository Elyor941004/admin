<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pricesites */

$this->title = 'Create Pricesites';
$this->params['breadcrumbs'][] = ['label' => 'Pricesites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pricesites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
