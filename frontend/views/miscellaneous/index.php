<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MiscellaneousSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Miscellaneouses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miscellaneous-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Miscellaneous', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'miscellaneous_c',
            'patient_c',
            'dengue_nsi',
            'dengue_igg_igm',
            'trophonin_i',
            //'salmonella_typhi_igg',
            //'salmonella_typhi_igm',
            //'hbsag',
            //'pregnancy_test',
            //'koh',
            //'medical_technologist_c',
            //'medical_doctor_c',
            //'date_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
