<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Adress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adress-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_adress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page')->dropDownList(['Условия' => 'Условия', 'Страница' => 'Страница'], [
    'options' => [
        'Условия' => ['class' => 'bar'],
        'Страница' => ['class' => 'bar']
    ],
    'prompt' => 'please choose',
])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
