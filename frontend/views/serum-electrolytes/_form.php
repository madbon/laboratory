<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SerumElectrolytes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="serum-electrolytes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_c')->textInput() ?>

    <?= $form->field($model, 'sodium')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'potassium')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chloride')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ionized_calcium')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_calcium')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medical_technologist_c')->textInput() ?>

    <?= $form->field($model, 'medical_doctor_c')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
