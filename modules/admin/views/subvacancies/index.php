<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subvacancies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subvacancies-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Subvacancies', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'requeriments',
            'vacancies_id',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {

                        return  Html::a('<span class="fa fa-pencil-alt text-success"></span>', $url, ['class' => 'mr-2']);

                    },
                    'delete' => function($url, $model){
                        return Html::a('<span class="fa fa-trash text-danger"></span>', ['delete', 'id' => $model->id], [
                            'class' => '',
                            'data' => [
                                'confirm' => 'Are you absolutely sure ? You will lose all the information about this user with this action.',
                                'method' => 'post',
                            ],
                        ]);
                    }
                ],

            ],
        ],
    ]); ?>


</div>
