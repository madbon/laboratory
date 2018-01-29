<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Hematology */

$this->title = $model->hematology_c;
$this->params['breadcrumbs'][] = ['label' => 'Hematologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hematology-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->hematology_c], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->hematology_c], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'hematology_c',
            'patient_c',
            'hemoglobin',
            'hematocrit',
            'rbc',
            'platelet_count',
            'wbc',
            'segmenters',
            'lymphocytes',
            'eosinophil',
            'monocyte',
            'blood_type',
            'medical_technologist_c',
            'medical_doctor_c',
            'date_created',
        ],
    ]) ?>

</div>
