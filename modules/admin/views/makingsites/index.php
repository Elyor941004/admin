<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Makingsites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makingsites-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Makingsites', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'url1',
            'url2',
            'photo' => [
                    'format'=>'html',
                    'value'=>function ($model) {
                        return  Html::img(Url::to('@web/uploads/makingsite/'.$model->photo), ['alt' => 'My logo', 'width'=>140]);
                    }
            ],
            'name1',
            'name2',
            //'page',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
