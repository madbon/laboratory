<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MedicalTechnologist */

$this->title = 'Update Medical Technologist: ' . $model->medical_technologist_c;
$this->params['breadcrumbs'][] = ['label' => 'Medical Technologists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->medical_technologist_c, 'url' => ['view', 'id' => $model->medical_technologist_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medical-technologist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
