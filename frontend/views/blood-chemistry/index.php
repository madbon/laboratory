<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\BloodChemistrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blood Chemistries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blood-chemistry-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Blood Chemistry', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'blood_chemistry_c',
            'patient_c',
            'random_blood_sugar',
            'fasting_blood_sugar',
            'blood_uric_acid',
            //'blood_urea_nitrogen',
            //'serum_creatinine',
            //'sgot_alt',
            //'sgpt_ast',
            //'lp_total_cholesterol',
            //'lp_triglycerides',
            //'lp_hdl',
            //'lp_ldl',
            //'glycosylated_hemoglobin',
            //'remarks',
            //'medical_technologist_c',
            //'medical_doctor_c',
            //'date_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
