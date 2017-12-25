<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Patients */

$this->title = 'Update Patients: ' . $model->patient_c;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->patient_c, 'url' => ['view', 'id' => $model->patient_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="patients-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
