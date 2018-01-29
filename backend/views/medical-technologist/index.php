<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MedicalTechnologistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medical Technologists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-technologist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Medical Technologist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'medical_technologist_c',
            'first_name',
            'middle_initial',
            'last_name',
            'prefix_title',
            //'license_number',
            //'signatory_img',
            //'suffix_title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
