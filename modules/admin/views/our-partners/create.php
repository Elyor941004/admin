<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OurPartners */

$this->title = 'Create Our Partners';
$this->params['breadcrumbs'][] = ['label' => 'Our Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-partners-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
