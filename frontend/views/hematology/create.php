<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Hematology */

$this->title = 'Create Laboratory Test';
$this->params['breadcrumbs'][] = ['label' => 'Home', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hematology-create">

    

    <div class="row">
    	<div class="col-sm-6">
    		<h1><?=  Html::encode($this->title) ?> : <span style="color:royalblue; font-size: 20px;">BON, MARK ANGELO DAYAGMIL </span></h1>
    	</div>
    	<div class="col-sm-6" style="text-align: right;">
    		Hema:
    		<span class="enabled"> Enabled</span>
    		Blood:
    		<span class="enable"> Enable</span>
    		Serum:
    		<span class="enable"> Enable</span>
    		Misc:
    		<span class="enabled"> Enabled</span>
    		Urin:
    		<span class="enabled"> Enabled</span>
    	</div>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'fullname' => $fullname,
        'bloodtype' => $bloodtype,
        'medtech' => $medtech,
        'medoc' => $medoc,
    ]) ?>

</div>
