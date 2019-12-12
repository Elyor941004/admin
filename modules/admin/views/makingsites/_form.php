<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Makingsites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="makingsites-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'url1')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'url2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'name1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page')->dropDownList(['Создание сайтов какие сайты мы создаем' => 'Создание сайтов какие сайты мы создаем'], [
    'options' => [
        'Создание сайтов какие сайты мы создаем' => ['class' => 'bar']
    ],
    'prompt' => 'please choose',
])?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
