<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MedicalDoctor */

$this->title = 'Update Medical Doctor: ' . $model->medical_doctor_c;
$this->params['breadcrumbs'][] = ['label' => 'Medical Doctors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->medical_doctor_c, 'url' => ['view', 'id' => $model->medical_doctor_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medical-doctor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
