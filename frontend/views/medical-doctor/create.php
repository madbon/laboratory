<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MedicalDoctor */

$this->title = 'Create Medical Doctor';
$this->params['breadcrumbs'][] = ['label' => 'Medical Doctors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-doctor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
