<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatSubparentCms */

$this->title = 'Update Sub Category: ' . $model->sub_parent_category_name;
$this->params['breadcrumbs'][] = ['label' => 'Sub Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Details: '.$model->sub_parent_category_name, 'url' => ['view', 'id' => $model->c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="urin-feca-cat-subparent-cms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'parent_category' => $parent_category,
    ]) ?>

</div>
