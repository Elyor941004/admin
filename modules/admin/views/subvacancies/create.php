<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subvacancies */

$this->title = 'Create Subvacancies';
$this->params['breadcrumbs'][] = ['label' => 'Subvacancies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subvacancies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
