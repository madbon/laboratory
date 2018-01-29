<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MedicalTechnologist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medical-technologist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_initial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prefix_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'license_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'signatory_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suffix_title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
