<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Hematology */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
<div class="hematology-form">

    <?php $form = ActiveForm::begin(); ?>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Hematology</a></li>
    <li><a data-toggle="tab" href="#menu1">Blood Chemistry</a></li>
    <li><a data-toggle="tab" href="#menu2">Serum Electrolytes</a></li>
    <li><a data-toggle="tab" href="#menu3">Miscellaneous</a></li>
    <li><a data-toggle="tab" href="#menu3">Urinalysis</a></li>
  </ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <div class="panel custompanel hematology" style="border-top: 1px solid white;">
            <div class="row">   
                <div class="col-sm-4">
                    <?= $form->field($model, 'patient_c')->widget(Select2::classname(), [
                            'data' => $fullname,
                            'options' => ['placeholder' => 'Select patient here'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                    ]);?>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'medical_technologist_c')->widget(Select2::classname(), [
                                            'data' => $medtech,
                                            'options' => ['placeholder' => 'Select medical technologist ', 'class' => 'form-control'],
                                            'pluginOptions' => [
                                                'allowClear' => true
                                            ],
                                    ])?>
                        </div>
                        <div class="col-sm-6">
                            <?= $form->field($model, 'medical_doctor_c')->widget(Select2::classname(), [
                                            'data' => $medoc,
                                            'options' => ['placeholder' => 'Select medical doctor ', 'class' => 'form-control'],
                                            'pluginOptions' => [
                                                'allowClear' => true
                                            ],
                                    ])?>
                        </div>
                       
                    </div>
                </div>
            </div>
            <hr>
            <!-- <p class="custom_p" ><span class="fa fa-info-circle"></span> Basic Information</p> -->
            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    <h4 class="test">Hemoglobin</h4>
                </div>
                <div class="col-sm-4">
                    <?= $form->field($model, 'hemoglobin')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div class="col-sm-4">
                    <p class="normal_value">M: 110-160 g/L</p>
                        <p class="normal_value">F:120-160g /L</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    <h4 class="test">Hematocrit</h4>
                </div>
                <div class="col-sm-4">
                    <?= $form->field($model, 'hematocrit')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div class="col-sm-4">
                    <p class="normal_value">M: 0.40  -0.54L/L </p>
                    <p class="normal_value">F:0.37-0.47 L/L </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    <h4 class="test">RBC</h4>
                </div>
                <div class="col-sm-4">
                    <?= $form->field($model, 'rbc')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div class="col-sm-4">
                    <p class="normal_value">M:4.5-6.3x10^12/L</p>
                    <p class="normal_value">F:4.2-5.5x10^12/L</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    <h4 class="test">Platelet Count</h4>
                </div>
                <div class="col-sm-4">
                    <?= $form->field($model, 'platelet_count')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div class="col-sm-4">
                    <p class="normal_value">150-400x10^9/L</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    <h4 class="test">WBC</h4>
                </div>
                <div class="col-sm-4">
                    <?= $form->field($model, 'wbc')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div class="col-sm-4">
                    <p class="normal_value">ADULT: 4.5-10.5X10^9/L </p>
                    <p class="normal_value">6-12 y/o: 4.5-13.5x10^9/L </p>
                    <p class="normal_value">2-5y/o: 5.0-21.0x10^9/L</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    
                </div>
                <div class="col-sm-4" style="text-align: center; font-size: 20px; font-weight: bold;">
                    WBC DIFFERENTAL COUNT
                </div>
                <div class="col-sm-4">  
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    <h4 class="test">Segmenters</h4>
                </div>
                <div class="col-sm-4">
                    <?= $form->field($model, 'segmenters')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div class="col-sm-4">
                    <p class="normal_value"40-60%</p>
                    <p class="normal_value">F:120-160g /L</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    <h4 class="test">Lymphocytes</h4>
                </div>
                <div class="col-sm-4">
                    <?= $form->field($model, 'lymphocytes')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div class="col-sm-4">
                    <p class="normal_value">20-40%</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    <h4 class="test">Eosinophil</h4>
                </div>
                <div class="col-sm-4">
                    <?= $form->field($model, 'lymphocytes')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div class="col-sm-4">
                    <p class="normal_value">20-40%</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    <h4 class="test">Monocyte</h4>
                </div>
                <div class="col-sm-4">
                    <?= $form->field($model, 'monocyte')->textInput(['maxlength' => true])->label(false) ?>
                </div>
                <div class="col-sm-4">
                    <p class="normal_value">2-8%</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4" style="text-align: right;">
                    <h4 class="test">Blood Type</h4>
                </div>
                <div class="col-sm-4">
                    <?= $form->field($model, 'blood_type')->widget(Select2::classname(), [
                                'data' => $bloodtype,
                                'options' => ['placeholder' => 'Select blood type here', 'class' => 'form-control'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                        ])->label(false);?>
                </div>
                <div class="col-sm-4">
                    <p class="normal_value">2-8%</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-10">
                    <div class="form-group" >
                        <?= Html::submitButton('<span class="fa fa-save"></span> Save', ['class' => 'btn btn-success btn-lg']) ?>
                        <?= Html::a('<span class="fa fa-print"></span> Print', ['update', 'id' => $model->hematology_c], ['class' => 'btn btn-info btn-lg']) ?>
                    </div>
                </div>
                <div class="col-sm-2">
                    
                </div>
            </div>
            </div>  <!-- Panel end -->



            

              
            </div>
            <div id="menu1" class="tab-pane fade">
              
            </div>
            <div id="menu2" class="tab-pane fade">
              
            </div>
            <div id="menu3" class="tab-pane fade">
            </div>
</div>


    
    

    

    

    <?php ActiveForm::end(); ?>

</div>
</div>