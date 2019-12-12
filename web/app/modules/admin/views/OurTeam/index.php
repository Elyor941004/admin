<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Our Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-team-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Our Team', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'photo:ntext',
            'name',
            'profession',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
