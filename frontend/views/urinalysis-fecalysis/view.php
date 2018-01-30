<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UrinalysisFecalysis */

$this->title = $model->urinalysis_fecalysis_c;
$this->params['breadcrumbs'][] = ['label' => 'Urinalysis Fecalyses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urinalysis-fecalysis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->urinalysis_fecalysis_c], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->urinalysis_fecalysis_c], [
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
            'urinalysis_fecalysis_c',
            'patient_c',
            'urin_macro_color',
            'urin_macro_transparency',
            'urin_macro_ph',
            'urin_macro_specific_gravity',
            'urin_macro_protein',
            'urin_macro_glucose',
            'urin_micro_wbc',
            'urin_micro_rbc',
            'urin_micro_bacteria',
            'urin_micro_epithelial_cells',
            'urin_micro_mucus_threads',
            'urin_micro_amorphous',
            'urin_others_casts',
            'urin_others_crystals',
            'feca_macro_color',
            'feca_macro_consistency',
            'feca_micro_wbc',
            'feca_micro_rbc',
            'feca_others',
            'remarks',
            'medical_technologist_c',
            'medical_doctor_c',
            'date_created',
        ],
    ]) ?>

</div>
