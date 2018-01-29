<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Miscellaneous */

$this->title = $model->miscellaneous_c;
$this->params['breadcrumbs'][] = ['label' => 'Miscellaneouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miscellaneous-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->miscellaneous_c], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->miscellaneous_c], [
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
            'miscellaneous_c',
            'patient_c',
            'dengue_nsi',
            'dengue_igg_igm',
            'trophonin_i',
            'salmonella_typhi_igg',
            'salmonella_typhi_igm',
            'hbsag',
            'pregnancy_test',
            'koh',
            'medical_technologist_c',
            'medical_doctor_c',
            'date_created',
        ],
    ]) ?>

</div>
