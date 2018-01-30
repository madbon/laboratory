<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatSubparentCmsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urin-feca-cat-subparent-cms-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'c') ?>

    <?= $form->field($model, 'urin_feca_cat_parent_cms_c') ?>

    <?= $form->field($model, 'sub_parent_category_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
