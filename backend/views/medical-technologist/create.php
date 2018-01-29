<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MedicalTechnologist */

$this->title = 'Create Medical Technologist';
$this->params['breadcrumbs'][] = ['label' => 'Medical Technologists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-technologist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
