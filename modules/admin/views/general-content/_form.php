<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GeneralContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="general-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'page')->dropDownList(['Условия' => 'Условия', 'Контекстная реклама этапы работы' => 'Контекстная реклама этапы работы',
        'Контекстная реклама' => 'Контекстная реклама', 'Поддержка сайта' => 'Поддержка сайта',
        'Поддержка сайта этапы работы' => 'Поддержка сайта этапы работы', 'Создание сайтов при разработке сайтов мы гарантируем' => 'Создание сайтов при разработке сайтов мы гарантируем',
        'Создание сайтов техт' => 'Создание сайтов техт', 'Проекты'=>'Проекты','Жирный техт SEO' => 'Жирный техт SEO', 'техт SEO'=> 'техт SEO', 'Нижный техт SEO' => 'Нижный техт SEO'], [
    'options' => [
        'Условия' => ['class' => 'bar'],
        'Контекстная реклама этапы работы' => ['class' => 'bar'],
        'Контекстная реклама' => ['class' => 'bar'],
        'Поддержка сайта' => ['class' => 'bar'],
        'Поддержка сайта этапы работы' => ['class' => 'bar'],
        'Создание сайтов при разработке сайтов мы гарантируем' => ['class' => 'bar'],
        'Создание сайтов техт' => ['class' => 'bar'],
        'Проекты' => ['class' => 'bar'],
        'Жирный техт SEO' => ['class' => 'bar'],
        'техт SEO' => ['class' => 'bar'],
        'Нижный техт SEO' => ['class' => 'bar']
    ],
    'prompt' => 'please choose',
])?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
