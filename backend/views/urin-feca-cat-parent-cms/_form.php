<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatParentCms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urin-feca-cat-parent-cms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent_category_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
