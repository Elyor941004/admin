<?php

use yii\helpers\Html;
use yii\helpers\Arrayhelper;
use yii\widgets\ActiveForm;
use app\models\Vacancies;

/* @var $this yii\web\View */
/* @var $model app\models\Subvacancies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subvacancies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'requeriments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vacancies_id')->dropDownList(Arrayhelper::map(Vacancies::find()->all(),'id', 'profession'), [
    'prompt' => 'please choose'
		]
	)?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
