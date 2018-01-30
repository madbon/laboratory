<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatValueCms */

$this->title = $model->c;
$this->params['breadcrumbs'][] = ['label' => 'Urin Feca Cat Value Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urin-feca-cat-value-cms-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->c], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->c], [
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
            'c',
            'urin_feca_cat_parent_cms_c',
            'urin_feca_cat_subparent_cms_c',
            'urin_feca_cat_child_cms_c',
            'value',
        ],
    ]) ?>

</div>
