<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Patients */

$this->title = $model->last_name.', '.$model->first_name.' '.$model->middle_name;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patients-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->patient_c], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->patient_c], [
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
            // 'patient_c',
            // 'first_name',
            // 'middle_name',
            // 'last_name',
            'sex',
            'contact_number',
            [                     
                'label' => 'Date of Birth',
                'value' => function ($model) {
                    return date("F j, Y", strtotime($model->dob));
                },
            ],
            [
              'label' => 'Age',
              'attribute' => 'age',
              'value' => function($model){
                $age = date('m') - date('m',strtotime($model->dob));
                if($age > 0){
                    $age = date('Y') - date('Y',strtotime($model->dob));
                }
                else{
                    if($age < 0){
                        $age = date('Y') - date('Y',strtotime($model->dob)) - 1;
                    }
                    else{
                        $age = date('d') - date('d',strtotime($model->dob));
                        if($age < 0){
                            $age = date('Y') - date('Y',strtotime($model->dob)) - 1;
                        }
                        else{
                            $age = date('Y') - date('Y',strtotime($model->dob));    
                        }
                    }
                }
                //$age = $model->BIRTHDATE.', '.- $model->BIRTHDATE;
                // if($age >= 0){
                // $age = date('Y') - date('Y',strtotime($model->BIRTHDATE));
                // }
                // else{
                // $age = date('Y') - date('Y',strtotime($model->BIRTHDATE)) - 1;
                // }
                return $age.' year(s) old';
              },
            ],
            'locale',
            'district',
            'division',
            'complete_address',
            'date_created',
        ],
    ]) ?>

</div>
