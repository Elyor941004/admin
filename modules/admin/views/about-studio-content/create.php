<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AboutStudioContent */

$this->title = 'Create About Studio Content';
$this->params['breadcrumbs'][] = ['label' => 'About Studio Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-studio-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
