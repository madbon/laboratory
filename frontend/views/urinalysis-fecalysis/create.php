<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UrinalysisFecalysis */

$this->title = 'Create Urinalysis Fecalysis';
$this->params['breadcrumbs'][] = ['label' => 'Urinalysis Fecalyses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urinalysis-fecalysis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
