<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BloodType */

$this->title = 'Update Blood Type: ' . $model->blood_type_c;
$this->params['breadcrumbs'][] = ['label' => 'Blood Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->blood_type_c, 'url' => ['view', 'id' => $model->blood_type_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blood-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
