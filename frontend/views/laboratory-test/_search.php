<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HematologySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hematology-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'hematology_c') ?>

    <?= $form->field($model, 'patient_c') ?>

    <?= $form->field($model, 'hemoglobin') ?>

    <?= $form->field($model, 'hematocrit') ?>

    <?= $form->field($model, 'rbc') ?>

    <?php // echo $form->field($model, 'platelet_count') ?>

    <?php // echo $form->field($model, 'wbc') ?>

    <?php // echo $form->field($model, 'segmenters') ?>

    <?php // echo $form->field($model, 'lymphocytes') ?>

    <?php // echo $form->field($model, 'eosinophil') ?>

    <?php // echo $form->field($model, 'monocyte') ?>

    <?php // echo $form->field($model, 'blood_type') ?>

    <?php // echo $form->field($model, 'medical_technologist_c') ?>

    <?php // echo $form->field($model, 'medical_doctor_c') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
