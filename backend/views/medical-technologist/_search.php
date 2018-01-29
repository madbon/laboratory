<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MedicalTechnologistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medical-technologist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'medical_technologist_c') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_initial') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'prefix_title') ?>

    <?php // echo $form->field($model, 'license_number') ?>

    <?php // echo $form->field($model, 'signatory_img') ?>

    <?php // echo $form->field($model, 'suffix_title') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
