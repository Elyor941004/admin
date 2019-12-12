<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AboutStudioContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-studio-content-form">

   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'page')->dropDownList(['Страница о студии' => 'Страница о студии', 'Создание сайтов какие сайты мы создаем' => 'Создание сайтов какие сайты мы создаем'], [
    'options' => [
        'Страница о студии' => ['class' => 'bar'],
        'Создание сайтов какие сайты мы создаем' => ['class' => 'bar']
    ],
    'prompt' => 'please choose',
])?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
