<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PatientsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patients-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    

    <div class="row">
        <div class="col-sm-2">
            <?= $form->field($model, 'first_name') ?>
            <?= $form->field($model, 'patient_c') ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'middle_name') ?>
            <?= $form->field($model, 'locale') ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'last_name') ?>
            <?= $form->field($model, 'district') ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'sex') ?>
            <?= $form->field($model, 'division') ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'contact_number') ?>
            <?= $form->field($model, 'complete_address') ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'dob') ?>
        </div>
    </div>

    <?php // $form->field($model, 'date_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
