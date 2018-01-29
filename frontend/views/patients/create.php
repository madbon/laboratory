<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Patients */

$this->title = 'Register Patients';
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patients-create">

    <h3><span class="fa fa-plus"></span> <?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'data' => $data,
    ]) ?>

</div>
