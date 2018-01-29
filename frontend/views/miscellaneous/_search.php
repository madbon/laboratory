<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MiscellaneousSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="miscellaneous-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'miscellaneous_c') ?>

    <?= $form->field($model, 'patient_c') ?>

    <?= $form->field($model, 'dengue_nsi') ?>

    <?= $form->field($model, 'dengue_igg_igm') ?>

    <?= $form->field($model, 'trophonin_i') ?>

    <?php // echo $form->field($model, 'salmonella_typhi_igg') ?>

    <?php // echo $form->field($model, 'salmonella_typhi_igm') ?>

    <?php // echo $form->field($model, 'hbsag') ?>

    <?php // echo $form->field($model, 'pregnancy_test') ?>

    <?php // echo $form->field($model, 'koh') ?>

    <?php // echo $form->field($model, 'medical_technologist_c') ?>

    <?php // echo $form->field($model, 'medical_doctor_c') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
