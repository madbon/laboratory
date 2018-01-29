<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BloodChemistry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blood-chemistry-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_c')->textInput() ?>

    <?= $form->field($model, 'random_blood_sugar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fasting_blood_sugar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'blood_uric_acid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'blood_urea_nitrogen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serum_creatinine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sgot_alt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sgpt_ast')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lp_total_cholesterol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lp_triglycerides')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lp_hdl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lp_ldl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'glycosylated_hemoglobin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medical_technologist_c')->textInput() ?>

    <?= $form->field($model, 'medical_doctor_c')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
