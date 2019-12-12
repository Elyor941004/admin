<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Makingsites */

$this->title = 'Create Makingsites';
$this->params['breadcrumbs'][] = ['label' => 'Makingsites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makingsites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
