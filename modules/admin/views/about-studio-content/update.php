<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AboutStudioContent */

$this->title = 'Update About Studio Content: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'About Studio Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-studio-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
