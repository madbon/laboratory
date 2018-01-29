<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SerumElectrolytesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="serum-electrolytes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'serum_electrolytes_c') ?>

    <?= $form->field($model, 'patient_c') ?>

    <?= $form->field($model, 'sodium') ?>

    <?= $form->field($model, 'potassium') ?>

    <?= $form->field($model, 'chloride') ?>

    <?php // echo $form->field($model, 'ionized_calcium') ?>

    <?php // echo $form->field($model, 'total_calcium') ?>

    <?php // echo $form->field($model, 'medical_technologist_c') ?>

    <?php // echo $form->field($model, 'medical_doctor_c') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
