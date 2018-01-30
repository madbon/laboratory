<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatSubparentCms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urin-feca-cat-subparent-cms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'urin_feca_cat_parent_cms_c')->widget(Select2::classname(), 
    	[
            'data' => $parent_category,
            'options' => ['placeholder' => 'Select Parent Category'],
            'pluginOptions' => 
	            [
	                'allowClear' => true
	        	],
    	]
    );?>

    <?= $form->field($model, 'sub_parent_category_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
