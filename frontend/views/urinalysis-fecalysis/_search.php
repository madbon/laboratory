<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UrinalysisFecalysisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urinalysis-fecalysis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'urinalysis_fecalysis_c') ?>

    <?= $form->field($model, 'patient_c') ?>

    <?= $form->field($model, 'urin_macro_color') ?>

    <?= $form->field($model, 'urin_macro_transparency') ?>

    <?= $form->field($model, 'urin_macro_ph') ?>

    <?php // echo $form->field($model, 'urin_macro_specific_gravity') ?>

    <?php // echo $form->field($model, 'urin_macro_protein') ?>

    <?php // echo $form->field($model, 'urin_macro_glucose') ?>

    <?php // echo $form->field($model, 'urin_micro_wbc') ?>

    <?php // echo $form->field($model, 'urin_micro_rbc') ?>

    <?php // echo $form->field($model, 'urin_micro_bacteria') ?>

    <?php // echo $form->field($model, 'urin_micro_epithelial_cells') ?>

    <?php // echo $form->field($model, 'urin_micro_mucus_threads') ?>

    <?php // echo $form->field($model, 'urin_micro_amorphous') ?>

    <?php // echo $form->field($model, 'urin_others_casts') ?>

    <?php // echo $form->field($model, 'urin_others_crystals') ?>

    <?php // echo $form->field($model, 'feca_macro_color') ?>

    <?php // echo $form->field($model, 'feca_macro_consistency') ?>

    <?php // echo $form->field($model, 'feca_micro_wbc') ?>

    <?php // echo $form->field($model, 'feca_micro_rbc') ?>

    <?php // echo $form->field($model, 'feca_others') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'medical_technologist_c') ?>

    <?php // echo $form->field($model, 'medical_doctor_c') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
