<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MainFooter */

$this->title = 'Create Main Footer';
$this->params['breadcrumbs'][] = ['label' => 'Main Footers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-footer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
