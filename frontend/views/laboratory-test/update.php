<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hematology */

$this->title = 'Update Hematology: ' . $model->hematology_c;
$this->params['breadcrumbs'][] = ['label' => 'Hematologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hematology_c, 'url' => ['view', 'id' => $model->hematology_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hematology-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
