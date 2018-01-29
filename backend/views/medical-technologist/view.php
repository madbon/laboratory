<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MedicalTechnologist */

$this->title = $model->medical_technologist_c;
$this->params['breadcrumbs'][] = ['label' => 'Medical Technologists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-technologist-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->medical_technologist_c], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->medical_technologist_c], [
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
            'medical_technologist_c',
            'first_name',
            'middle_initial',
            'last_name',
            'prefix_title',
            'license_number',
            'signatory_img',
            'suffix_title',
        ],
    ]) ?>

</div>
