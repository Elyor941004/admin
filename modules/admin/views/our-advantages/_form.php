<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OurAdvantages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="our-advantages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

     <?= $form->field($model, 'page')->dropDownList(['Наши преимущества' => 'Наши преимущества', 'Создание сайтов' => 'Создание сайтов', 
        'Создание сайтов какие сайты мы создаем' => 'Создание сайтов какие сайты мы создаем', 'SMM' => 'SMM', 'Мы предоставляем своим клиентам:' => 'Мы предоставляем своим клиентам:',
         'Система продвижения SMM актуальна при:' => 'Система продвижения SMM актуальна при:'], [
    'options' => [
        'Наши преимущества' => ['class' => 'bar'],
        'Создание сайтов' => ['class' => 'bar'],
        'Создание сайтов какие сайты мы создаем' => ['class' => 'bar'],
        'Мы предоставляем своим клиентам:' => ['class' => 'bar'],
        'SMM' => ['class' => 'bar'],
        'Система продвижения SMM актуальна при:' => ['class' => 'bar']
    ],
    'prompt' => 'please choose',
])?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
