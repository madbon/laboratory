<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\HematologySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hematologies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hematology-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hematology', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hematology_c',
            'patient_c',
            'hemoglobin',
            'hematocrit',
            'rbc',
            //'platelet_count',
            //'wbc',
            //'segmenters',
            //'lymphocytes',
            //'eosinophil',
            //'monocyte',
            //'blood_type',
            //'medical_technologist_c',
            //'medical_doctor_c',
            //'date_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
