<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SerumElectrolytesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Serum Electrolytes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serum-electrolytes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Serum Electrolytes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'serum_electrolytes_c',
            'patient_c',
            'sodium',
            'potassium',
            'chloride',
            //'ionized_calcium',
            //'total_calcium',
            //'medical_technologist_c',
            //'medical_doctor_c',
            //'date_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
