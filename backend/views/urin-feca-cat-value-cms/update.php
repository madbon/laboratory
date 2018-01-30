<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatValueCms */

$this->title = 'Update Urin Feca Cat Value Cms: ' . $model->c;
$this->params['breadcrumbs'][] = ['label' => 'Urin Feca Cat Value Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->c, 'url' => ['view', 'id' => $model->c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="urin-feca-cat-value-cms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
