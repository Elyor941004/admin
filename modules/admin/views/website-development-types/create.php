<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WebsiteDevelopmentTypes */

$this->title = 'Create Website Development Types';
$this->params['breadcrumbs'][] = ['label' => 'Website Development Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="website-development-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
