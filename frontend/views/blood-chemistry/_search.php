<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BloodChemistrySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blood-chemistry-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'blood_chemistry_c') ?>

    <?= $form->field($model, 'patient_c') ?>

    <?= $form->field($model, 'random_blood_sugar') ?>

    <?= $form->field($model, 'fasting_blood_sugar') ?>

    <?= $form->field($model, 'blood_uric_acid') ?>

    <?php // echo $form->field($model, 'blood_urea_nitrogen') ?>

    <?php // echo $form->field($model, 'serum_creatinine') ?>

    <?php // echo $form->field($model, 'sgot_alt') ?>

    <?php // echo $form->field($model, 'sgpt_ast') ?>

    <?php // echo $form->field($model, 'lp_total_cholesterol') ?>

    <?php // echo $form->field($model, 'lp_triglycerides') ?>

    <?php // echo $form->field($model, 'lp_hdl') ?>

    <?php // echo $form->field($model, 'lp_ldl') ?>

    <?php // echo $form->field($model, 'glycosylated_hemoglobin') ?>

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
