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
    <?php
    $js='
       
      $(document).ready(function(){
        // this function shows the current tab base on the current hash in URL

        var hash = window.location.hash;

        // This function will add hash(#) with id name to url everytime the user click the tab 
        // tab 1
        $("ul#lab_test_tab li:nth-child(1)").click(function(){
            window.location.hash = "#hema";
        });

        //tab 2
        $("ul#lab_test_tab li:nth-child(2)").click(function(){
            window.location.hash = "#blood";
        });

        //tab 3
        $("ul#lab_test_tab li:nth-child(3)").click(function(){
            window.location.hash = "#serum";
        });

        //tab 4
        $("ul#lab_test_tab li:nth-child(4)").click(function(){
            window.location.hash = "#misc";
        });

         //tab 5
        $("ul#lab_test_tab li:nth-child(5)").click(function(){
            window.location.hash = "#urin";
        });

        // add active class to tab using current hash

        if(hash == "#hema") // if url hash(#) is equal to value
        {
            $("#hema").removeClass("active"); // remove active class content for first tab

            $("#blood").addClass("active");
            $(".tab-content #hema").addClass("active in");
        }
        else if(hash == "#blood")
        {
            $("#hema").removeClass("active"); // remove active class content for first tab

            $("#blood").addClass("active");
            $("ul#lab_test_tab li:first-child").removeClass("active");
            $("ul#lab_test_tab li:nth-child(2)").addClass("active"); //2nd tab
            $(".tab-content #blood").addClass("active in");
        }
        else if(hash == "#serum")
        {
            $("#hema").removeClass("active"); // remove active class in content for first tab

            $("#serum").addClass("active");
            $("ul#lab_test_tab li:first-child").removeClass("active");
            $("ul#lab_test_tab li:nth-child(3)").addClass("active"); //3nd tab
            $(".tab-content #serum").addClass("active in");
        }
        else if(hash == "#misc")
        {
            $("#hema").removeClass("active"); // remove active class in content for first tab

            $("#misc").addClass("active");
            $("ul#lab_test_tab li:first-child").removeClass("active");
            $("ul#lab_test_tab li:nth-child(4)").addClass("active"); //4nd tab
            $(".tab-content #misc").addClass("active in");
        }
        else if(hash == "#urin")
        {
            $("#hema").removeClass("active"); // remove active class in content for first tab

            $("#urin").addClass("active");
            $("ul#lab_test_tab li:first-child").removeClass("active");
            $("ul#lab_test_tab li:nth-child(5)").addClass("active"); //5nd tab
            $(".tab-content #urin").addClass("active in");
        }

        // Click 



      });
    ';
    $this->registerJs($js);
?>

<ul class="nav nav-tabs" id="lab_test_tab">
    <li class="active"><a data-toggle="tab" href="#hema">Hematology</a></li>
    <li><a data-toggle="tab" href="#blood">Blood Chemistry</a></li>
    <li><a data-toggle="tab" href="#serum">Serum Electrolytes</a></li>
    <li><a data-toggle="tab" href="#misc">Miscellaneous</a></li>
    <li><a data-toggle="tab" href="#urin">Urinalysis</a></li>
  </ul>

<div class="tab-content">
    <div id="hema" class="tab-pane fade in active">
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
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
                <div class="col-sm-2">
                    
                </div>
            </div>
            </div>  <!-- Panel end -->



            

              
            </div>

        
            <div id="blood" class="tab-pane fade"> <!-- tab content for BLOOD CHEMISTRY -->
                <?php $form = ActiveForm::begin(); ?> <!-- Blood Chemistry Active form -->

                
                    <div class="panel custompanel blood" style="border-top: 1px solid white;">

                            <div class="row">   
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'patient_c')->widget(Select2::classname(), [
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
                                            <?= $form->field($model_blood, 'medical_technologist_c')->widget(Select2::classname(), [
                                                            'data' => $medtech,
                                                            'options' => ['placeholder' => 'Select medical technologist ', 'class' => 'form-control'],
                                                            'pluginOptions' => [
                                                                'allowClear' => true
                                                            ],
                                                    ])?>
                                        </div>
                                        <div class="col-sm-6">
                                            <?= $form->field($model_blood, 'medical_doctor_c')->widget(Select2::classname(), [
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

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">Random Blood Sugar</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'random_blood_sugar')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">80-120 mg/dL</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">Fasting Blood Sugar</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'fasting_blood_sugar')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">70-105 mg/dL</p>
                                </div>
                            </div>
  
                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">Blood Uric Acid</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'blood_uric_acid')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">2.5-7.0 mg/ dL</p>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">Blood Urea Nitrogen</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'blood_urea_nitrogen')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">15-45 mg/dL</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">Serum Creatinine</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'serum_creatinine')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">0.5-1.7 mg/dL</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">SGOT/ALT</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'sgot_alt')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">upto 40 IU/L</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">SGPT/AST</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'sgpt_ast')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">upto 38 IU/L</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;"></div>
                                <div class="col-sm-4" style="text-align: center; font-size: 20px; font-weight: bold;">
                                    LIPID PROFILE
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">Total Cholesterol</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'lp_total_cholesterol')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">114-285 mg/dL</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">Triglycerides</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'lp_triglycerides')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">36-165 mg/dL</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">HDL</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'lp_hdl')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">30-75 mg/dL</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">LDL</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'lp_ldl')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">66-178 mg/dL</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;"></div>
                                <div class="col-sm-4" style="text-align: center; font-size: 20px; font-weight: bold;">
                                    HbA1c
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-sm-4" style="text-align: right;">
                                    <h4 class="test">Glycosylated Hemoglobin</h4>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model_blood, 'glycosylated_hemoglobin')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="col-sm-4">
                                    <p class="normal_value">4.0 - 6.0 %</p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group" >
                                        <?= Html::submitButton('<span class="fa fa-save"></span> Save', ['class' => 'btn btn-success btn-lg']) ?>
                                        <?= Html::a('<span class="fa fa-print"></span> Print', ['update', 'id' => $model_blood->blood_chemistry_c], ['class' => 'btn btn-info btn-lg']) ?>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        
                    </div>

                    
                

                <?php ActiveForm::end(); ?>
            </div>
        
            <div id="serum" class="tab-pane fade">
                <div class="panel custompanel blood" style="border-top: 1px solid white;">
                    <?php $form = ActiveForm::begin(); ?> <!-- Serum Electrolytes Active form -->

                        <div class="row">   
                            <div class="col-sm-4">
                                <?= $form->field($model_serum, 'patient_c')->widget(Select2::classname(), [
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
                                        <?= $form->field($model_serum, 'medical_technologist_c')->widget(Select2::classname(), [
                                                        'data' => $medtech,
                                                        'options' => ['placeholder' => 'Select medical technologist ', 'class' => 'form-control'],
                                                        'pluginOptions' => [
                                                            'allowClear' => true
                                                        ],
                                                ])?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?= $form->field($model_serum, 'medical_doctor_c')->widget(Select2::classname(), [
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
                       
                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">Sodium</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_serum, 'sodium')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4">
                                <p class="normal_value">135.0 – 148.0</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">Potassium</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_serum, 'potassium')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4">
                                <p class="normal_value">3.5 – 5.3</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">Chloride</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_serum, 'chloride')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4">
                                <p class="normal_value">98.0 - 107.0</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">Ionized Calcium</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_serum, 'ionized_calcium')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4">
                                <p class="normal_value">1.10 - 1.30</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">Total Calcium</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_serum, 'total_calcium')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4">
                                <p class="normal_value">2.10 - 2.90</p>
                            </div>
                        </div>

                    <?php ActiveForm::end(); ?>

                    <hr>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group" >
                                <?= Html::submitButton('<span class="fa fa-save"></span> Save', ['class' => 'btn btn-success btn-lg']) ?>
                                <?= Html::a('<span class="fa fa-print"></span> Print', ['update', 'id' => $model_serum->serum_electrolytes_c], ['class' => 'btn btn-info btn-lg']) ?>
                                
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                </div>
              
            </div>
            <div id="misc" class="tab-pane fade">
                
                <div class="panel custompanel misc" style="border-top: 1px solid white;">

                    <?php $form = ActiveForm::begin(); ?> <!-- Miscellaneous Active form -->
                        <div class="row">   
                            <div class="col-sm-4">
                                <?= $form->field($model_misc, 'patient_c')->widget(Select2::classname(), [
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
                                        <?= $form->field($model_misc, 'medical_technologist_c')->widget(Select2::classname(), [
                                                        'data' => $medtech,
                                                        'options' => ['placeholder' => 'Select medical technologist ', 'class' => 'form-control'],
                                                        'pluginOptions' => [
                                                            'allowClear' => true
                                                        ],
                                                ])?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?= $form->field($model_misc, 'medical_doctor_c')->widget(Select2::classname(), [
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

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;"></div>
                            <div class="col-sm-4">
                                <h4 style="text-align: center;"><b>Dengue duo</b></h4>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">Dengue NS1:</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_misc, 'dengue_nsi')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">Dengue IgG/IgM:</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_misc, 'dengue_igg_igm')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;"></div>
                            <div class="col-sm-4">
                                <h4 style="text-align: center;"><b>Trophonin </b></h4>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">Trophonin I</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_misc, 'trophonin_i')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;"></div>
                            <div class="col-sm-4">
                                <h4 style="text-align: center;"><b>Typhidot </b></h4>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">Salmonella Typhi IgG</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_misc, 'salmonella_typhi_igg')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">Salmonella Typhi IgM</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_misc, 'salmonella_typhi_igm')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;"></div>
                            <div class="col-sm-4">
                                <h4 style="text-align: center;"><b>Hepatitis B surface Antigen (screening) </b></h4>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test">HBsAg</h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_misc, 'hbsag')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>
                        <br>
                        <br>

                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test"><b>Pregnancy Test</b></h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_misc, 'pregnancy_test')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-sm-4" style="text-align: right;">
                                <h4 class="test"><b>KOH</b></h4>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($model_misc, 'koh')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                            <div class="col-sm-4"> </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group" >
                                    <?= Html::submitButton('<span class="fa fa-save"></span> Save', ['class' => 'btn btn-success btn-lg']) ?>
                                    <?= Html::a('<span class="fa fa-print"></span> Print', ['update', 'id' => $model_misc->miscellaneous_c], ['class' => 'btn btn-info btn-lg']) ?>
                                    
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                    <?php ActiveForm::end(); ?>

                </div>

            </div>
            <div id="urin" class="tab-pane fade">
                Urinalysis
            </div>
</div>

    

</div>
</div>