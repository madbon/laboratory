<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatChildCms */

$this->title = 'Update Urin Feca Cat Child Cms: ' . $model->c;
$this->params['breadcrumbs'][] = ['label' => 'Urin Feca Cat Child Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->c, 'url' => ['view', 'id' => $model->c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="urin-feca-cat-child-cms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'parent_category' => $parent_category,
		'sub_category' => $sub_category,
    ]) ?>

</div>
