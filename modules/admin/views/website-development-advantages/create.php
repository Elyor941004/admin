<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WebsiteDevelopmentAdvantages */

$this->title = 'Create Website Development Advantages';
$this->params['breadcrumbs'][] = ['label' => 'Website Development Advantages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="website-development-advantages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
