<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BloodChemistry */

$this->title = 'Create Blood Chemistry';
$this->params['breadcrumbs'][] = ['label' => 'Blood Chemistries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blood-chemistry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
