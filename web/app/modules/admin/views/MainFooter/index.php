<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Main Footers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-footer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Main Footer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'adress',
            'our_phone_number',
            'link',
            'text',
            //'your_phone_number',
            //'email:email',
            //'text_about_you',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
