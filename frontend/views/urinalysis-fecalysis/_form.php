<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UrinalysisFecalysis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urinalysis-fecalysis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_c')->textInput() ?>

    <?= $form->field($model, 'urin_macro_color')->textInput() ?>

    <?= $form->field($model, 'urin_macro_transparency')->textInput() ?>

    <?= $form->field($model, 'urin_macro_ph')->textInput() ?>

    <?= $form->field($model, 'urin_macro_specific_gravity')->textInput() ?>

    <?= $form->field($model, 'urin_macro_protein')->textInput() ?>

    <?= $form->field($model, 'urin_macro_glucose')->textInput() ?>

    <?= $form->field($model, 'urin_micro_wbc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urin_micro_rbc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urin_micro_bacteria')->textInput() ?>

    <?= $form->field($model, 'urin_micro_epithelial_cells')->textInput() ?>

    <?= $form->field($model, 'urin_micro_mucus_threads')->textInput() ?>

    <?= $form->field($model, 'urin_micro_amorphous')->textInput() ?>

    <?= $form->field($model, 'urin_others_casts')->textInput() ?>

    <?= $form->field($model, 'urin_others_crystals')->textInput() ?>

    <?= $form->field($model, 'feca_macro_color')->textInput() ?>

    <?= $form->field($model, 'feca_macro_consistency')->textInput() ?>

    <?= $form->field($model, 'feca_micro_wbc')->textInput() ?>

    <?= $form->field($model, 'feca_micro_rbc')->textInput() ?>

    <?= $form->field($model, 'feca_others')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textInput() ?>

    <?= $form->field($model, 'medical_technologist_c')->textInput() ?>

    <?= $form->field($model, 'medical_doctor_c')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
