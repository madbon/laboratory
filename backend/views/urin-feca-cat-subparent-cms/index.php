<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UrinFecaCatSubparentCmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urin-feca-cat-subparent-cms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sub Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'c',
            // 'urin_feca_cat_parent_cms_c',
            [
                'label' => 'Parent Category',
                'attribute' => 'urin_feca_cat_parent_cms_c',
                'value' => 'parentCategory.parent_category_name',
            ],
            'sub_parent_category_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
