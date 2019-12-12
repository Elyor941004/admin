<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\SiteInformation;


/* @var $this yii\web\View */
/* @var $model app\models\SiteContents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-contents-form">
    
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>
    
   <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'page')->dropDownList(['Создание сайтов каким должен быть хороший сайт?' => 'Создание сайтов каким должен быть хороший сайт?',
'Создание сайтов преимущества наших сайтов' => 'Создание сайтов преимущества наших сайтов', 'Создание сайтов какие сайты мы создаем' => 'Создание сайтов какие сайты мы создаем',
        'Проекты'=>'Проекты', 'Система продвижения SMM актуальна при:'=>'Система продвижения SMM актуальна при:'], [
    'options' => [
        'Создание сайтов каким должен быть хороший сайт?' => ['class' => 'bar'],
        'Создание сайтов преимущества наших сайтов' => ['class' => 'bar'],
        'Создание сайтов какие сайты мы создаем' => ['class' => 'bar'],
        'Проекты' => ['class' => 'bar'],

        ],
    'prompt' => 'please choose',
])?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
