<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatParentCms */

$this->title = $model->parent_category_name;
$this->params['breadcrumbs'][] = ['label' => 'Parent Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urin-feca-cat-parent-cms-view">

    <h1>Details: <?= Html::encode($this->title) ?></h1>

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
            'parent_category_name',
        ],
    ]) ?>

</div>
