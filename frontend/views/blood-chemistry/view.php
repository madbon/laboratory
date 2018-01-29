<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BloodChemistry */

$this->title = $model->blood_chemistry_c;
$this->params['breadcrumbs'][] = ['label' => 'Blood Chemistries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blood-chemistry-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->blood_chemistry_c], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->blood_chemistry_c], [
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
            'blood_chemistry_c',
            'patient_c',
            'random_blood_sugar',
            'fasting_blood_sugar',
            'blood_uric_acid',
            'blood_urea_nitrogen',
            'serum_creatinine',
            'sgot_alt',
            'sgpt_ast',
            'lp_total_cholesterol',
            'lp_triglycerides',
            'lp_hdl',
            'lp_ldl',
            'glycosylated_hemoglobin',
            'remarks',
            'medical_technologist_c',
            'medical_doctor_c',
            'date_created',
        ],
    ]) ?>

</div>
