<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UrinFecaCatValueCmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urin Feca Cat Value Cms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urin-feca-cat-value-cms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Urin Feca Cat Value Cms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'c',
            'urin_feca_cat_parent_cms_c',
            'urin_feca_cat_subparent_cms_c',
            'urin_feca_cat_child_cms_c',
            'value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
