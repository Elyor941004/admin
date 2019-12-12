<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WebsiteDevelopmentCharacters */

$this->title = 'Create Website Development Characters';
$this->params['breadcrumbs'][] = ['label' => 'Website Development Characters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="website-development-characters-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
