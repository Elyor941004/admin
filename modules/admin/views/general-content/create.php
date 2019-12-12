<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GeneralContent */

$this->title = 'Create General Content';
$this->params['breadcrumbs'][] = ['label' => 'General Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
