<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Hematology */

$this->title = 'Create Laboratory Test :';
$this->params['breadcrumbs'][] = ['label' => 'Home', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laboratory-test-create">

    

    <div class="row">
    	<div class="col-sm-6">
    		<h1 class="font_25px"><?=  Html::encode($this->title) ?>  <span class="font_20px my_uppercase" style="color:royalblue;"> <?= $patient_fullname; ?> </span></h1>
    	</div>
    	<!-- <div class="col-sm-6" style="text-align: right;">
    		Hema:
    		<span class="disabled" id="en_hema"> Disabled</span>
    		Blood:
    		<span class="disabled" id="en_blood"> Disabled</span>
    		Serum:
    		<span class="disabled" id="en_serum"> Disabled</span>
    		Misc:
    		<span class="disabled" id="en_misc"> Disabled</span>
    		Urin:
    		<span class="disabled" id="en_urin"> Disabled</span>
    	</div> -->
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'fullname' => $fullname,
        'bloodtype' => $bloodtype,
        'medtech' => $medtech,
        'medoc' => $medoc,
        'model_blood' => $model_blood,
        'model_serum' => $model_serum,
        'model_misc' => $model_misc,
    ]) ?>

</div>
