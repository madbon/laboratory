<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatChildCms */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$this->registerJs('
$(document).ready(function(){
		$("#urinfecacatchildcms-urin_feca_cat_subparent_cms_c").val("1");
});


');

?>

<div class="urin-feca-cat-child-cms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $url = \yii\helpers\Url::to(['get-cms/get-sub-category']);
    echo $form->field($model, 'urin_feca_cat_parent_cms_c')->widget(Select2::classname(), 
    	[
            'data' => $parent_category,
            'options' => ['placeholder' => 'Select Parent Category'],
            'pluginOptions' => 
	            [
	                'allowClear' => true
	        	],
        	'pluginEvents'=>
        		[
                    'select2:select'=>'
                        function(){
                            var parent_id = this.value;
                            // -------- get last name
                            var output = "";
                            $.ajax({
                                url: "'.$url.'",
                                data: { parent_id:parent_id}
                                
                            }).done(function(result) {

                            	$("#urinfecacatchildcms-urin_feca_cat_subparent_cms_c").html("").select2({data:result, theme:"krajee", allowClear:true, width:"100%"});
                            });
                        }'
                ],
    	]
    );?>

    <?= $form->field($model, 'urin_feca_cat_subparent_cms_c')->widget(Select2::classname(), 
    	[
            // 'data' => $sub_category,
            'options' => ['placeholder' => 'Select Sub Category'],
            'pluginOptions' => 
	            [
	                'allowClear' => true
	        	],
    	]
    );?>

    <?= $form->field($model, 'child_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
