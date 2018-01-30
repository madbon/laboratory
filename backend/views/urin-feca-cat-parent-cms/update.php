<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatParentCms */

$this->title = 'Update Urin Feca Cat Parent Cms: ' . $model->c;
$this->params['breadcrumbs'][] = ['label' => 'Urin Feca Cat Parent Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->c, 'url' => ['view', 'id' => $model->c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="urin-feca-cat-parent-cms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
