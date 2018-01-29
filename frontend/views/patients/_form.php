<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model backend\models\Patients */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patients-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="panel custompanel">
        <p class="custom_p" ><span class="fa fa-info-circle"></span> Basic Information</p>
        <br/>
        <div class="row">
            <div class="col-sm-4">
                <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <?= $form->field($model, 'sex')->widget(Select2::classname(), [
                    'data' => $data,
                    'options' => ['placeholder' => '-'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model,'dob')->widget(
                    DatePicker::className(),[
                    'name' => 'check_issue_date', 
                    'value' => date('Y-M-d', strtotime('+2 days')),
                    'options' => ['placeholder' => 'Select date ...'],
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'todayHighlight' => true,
                         'autoclose'=>true,
                ]]);?>
            </div>
        </div>
    </div>

    <div class="panel custompanel">
            <p class="custom_p" ><span class="fa fa-location-arrow"></span> Location Information</p>
            <br/>

        <div class="row">
            <div class="col-sm-4">
                <?= $form->field($model, 'locale')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'division')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <?= $form->field($model, 'complete_address')->textarea(['maxlength' => true,'rows'=>'3']) ?>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
