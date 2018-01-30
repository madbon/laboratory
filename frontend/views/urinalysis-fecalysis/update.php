<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UrinalysisFecalysis */

$this->title = 'Update Urinalysis Fecalysis: ' . $model->urinalysis_fecalysis_c;
$this->params['breadcrumbs'][] = ['label' => 'Urinalysis Fecalyses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->urinalysis_fecalysis_c, 'url' => ['view', 'id' => $model->urinalysis_fecalysis_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="urinalysis-fecalysis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
