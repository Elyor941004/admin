<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AboutStudio */

$this->title = 'Create About Studio';
$this->params['breadcrumbs'][] = ['label' => 'About Studios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-studio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
