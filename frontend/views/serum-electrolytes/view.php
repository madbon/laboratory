<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SerumElectrolytes */

$this->title = $model->serum_electrolytes_c;
$this->params['breadcrumbs'][] = ['label' => 'Serum Electrolytes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serum-electrolytes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->serum_electrolytes_c], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->serum_electrolytes_c], [
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
            'serum_electrolytes_c',
            'patient_c',
            'sodium',
            'potassium',
            'chloride',
            'ionized_calcium',
            'total_calcium',
            'medical_technologist_c',
            'medical_doctor_c',
            'date_created',
        ],
    ]) ?>

</div>
