<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BloodType */

$this->title = $model->blood_type_c;
$this->params['breadcrumbs'][] = ['label' => 'Blood Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blood-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->blood_type_c], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->blood_type_c], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'blood_type_c',
            'blood_type',
        ],
    ]) ?>

</div>
