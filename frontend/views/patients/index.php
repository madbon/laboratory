<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PatientsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patients-index">

    <h1>
        <?= Html::encode($this->title) ?> 
        <span class="search_link fa fa-search"> Search</span> 
        <span class="search_close fa fa-times"> Close</span>
    </h1>

    <div class="panel custompanel search_panel">
        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>

    <p>
        <?= Html::a('<span class="fa fa-plus"></span> Add Patients', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['table table-responsive'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'patient_c',
            [
                'label' => 'Laboratory Number',
                'attribute' => 'patient_c',
                'value' => function ($model) {
                    $patient_c = $model->patient_c;
                    $lab_number;

                    if($patient_c > 0 && $patient_c <= 9)
                    {
                        $lab_number = "LAB"."000".$patient_c;
                    }
                    else if($patient_c > 9 && $patient_c <= 99) 
                    {
                        $lab_number = "LAB"."00".$patient_c;
                    }
                    else if($patient_c > 99 && $patient_c <= 999) 
                    {
                        $lab_number = "LAB"."0".$patient_c;
                    }
                    else if($patient_c > 999) 
                    {
                        $lab_number = "LAB".$patient_c;
                    }

                    return $lab_number;
                    
                },
            ],
            'first_name',
            'middle_name',
            'last_name',
            'sex',
             [                     
                'label' => 'Date of Birth',
                'attribute' => 'dob',
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
                return $age;
              },
            ],
            // 'contact_number',
            // 'dob',
            // 'locale',
            // 'district',
            // 'division',
            // 'complete_address',
            // 'date_created',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} ',
                'buttons'=>[
                        'view' => function($url, $model){
                             return Html::a('<span class="glyphicon glyphicon-eye-open"></span> View', ['view', 
                                'id' => $model->patient_c], ['class'=>'btn btn-info btn-xs']);
                        },
                        'update' => function($url, $model){
                             return Html::a('<span class="glyphicon glyphicon-edit"></span> Update', ['update', 
                                'id' => $model->patient_c], ['class'=>'btn btn-primary btn-xs']);
                        },
                        'delete' => function($url, $model){
                             return Html::a('<span class="glyphicon glyphicon-trash"></span> Delete', $url,[
                                    'title' => Yii::t('app', 'Delete'),
                                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete?'),
                                    'data-method' => 'post', 'data-pjax' => '0',
                                    'class' => 'btn btn-danger btn-xs'
                        ]);
                        }
                    ],
        ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
