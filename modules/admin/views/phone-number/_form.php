<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhoneNumber */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phone-number-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone_number')->textInput() ?>

    <?= $form->field($model, 'page')->dropDownList(['Страница о студии' => 'Страница о студии', 'Страница' => 'Страница'], [
    'options' => [
        'Страница о студии' => ['class' => 'bar'],
        'Страница' => ['class' => 'bar']
    ],
    'prompt' => 'please choose',
])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
