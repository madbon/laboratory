<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Miscellaneous */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="miscellaneous-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_c')->textInput() ?>

    <?= $form->field($model, 'dengue_nsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dengue_igg_igm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trophonin_i')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salmonella_typhi_igg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salmonella_typhi_igm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hbsag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pregnancy_test')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'koh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medical_technologist_c')->textInput() ?>

    <?= $form->field($model, 'medical_doctor_c')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
