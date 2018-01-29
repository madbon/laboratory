<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BloodChemistry */

$this->title = 'Update Blood Chemistry: ' . $model->blood_chemistry_c;
$this->params['breadcrumbs'][] = ['label' => 'Blood Chemistries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->blood_chemistry_c, 'url' => ['view', 'id' => $model->blood_chemistry_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blood-chemistry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
