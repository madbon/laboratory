<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatValueCms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urin-feca-cat-value-cms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'urin_feca_cat_parent_cms_c')->textInput() ?>

    <?= $form->field($model, 'urin_feca_cat_subparent_cms_c')->textInput() ?>

    <?= $form->field($model, 'urin_feca_cat_child_cms_c')->textInput() ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
