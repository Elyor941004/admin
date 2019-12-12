<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Footer */

$this->title = 'Create Footer';
$this->params['breadcrumbs'][] = ['label' => 'Footers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="footer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
