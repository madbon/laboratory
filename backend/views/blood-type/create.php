<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BloodType */

$this->title = 'Create Blood Type';
$this->params['breadcrumbs'][] = ['label' => 'Blood Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blood-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
