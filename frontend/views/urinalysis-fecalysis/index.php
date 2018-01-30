<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UrinalysisFecalysisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urinalysis Fecalyses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urinalysis-fecalysis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Urinalysis Fecalysis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'urinalysis_fecalysis_c',
            'patient_c',
            'urin_macro_color',
            'urin_macro_transparency',
            'urin_macro_ph',
            //'urin_macro_specific_gravity',
            //'urin_macro_protein',
            //'urin_macro_glucose',
            //'urin_micro_wbc',
            //'urin_micro_rbc',
            //'urin_micro_bacteria',
            //'urin_micro_epithelial_cells',
            //'urin_micro_mucus_threads',
            //'urin_micro_amorphous',
            //'urin_others_casts',
            //'urin_others_crystals',
            //'feca_macro_color',
            //'feca_macro_consistency',
            //'feca_micro_wbc',
            //'feca_micro_rbc',
            //'feca_others',
            //'remarks',
            //'medical_technologist_c',
            //'medical_doctor_c',
            //'date_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
