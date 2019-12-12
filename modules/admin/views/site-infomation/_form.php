<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\SiteInformation;


/* @var $this yii\web\View */
/* @var $model app\models\SiteInfomation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-infomation-form">

    <<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    
    <?= $form->field($model, 'name')->dropDownList(ArrayHelper::map(SiteInformation::find()->all(),'id', 'name'),['prompt' => 'select name']) ?>

     <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'information')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'page')->dropDownList(['Создание сайтов' => 'Создание сайтов', 'Страница' => 'Страница'], [
    'options' => [
        'Создание сайтов' => ['class' => 'bar'],
        'Страница' => ['class' => 'bar']
    ],
    'prompt' => 'please choose',
])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
