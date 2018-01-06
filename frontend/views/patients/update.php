<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Patients */

$this->title = 'Update Patients: ' . $model->last_name.', '.$model->first_name.' '.$model->middle_name;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->last_name.', '.$model->first_name.' '.$model->middle_name, 'url' => ['view', 'id' => $model->patient_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="patients-update">

    <h3><span class="fa fa-edit"></span> <?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'data' => $data,
    ]) ?>

</div>
