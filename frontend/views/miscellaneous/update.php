<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Miscellaneous */

$this->title = 'Update Miscellaneous: ' . $model->miscellaneous_c;
$this->params['breadcrumbs'][] = ['label' => 'Miscellaneouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->miscellaneous_c, 'url' => ['view', 'id' => $model->miscellaneous_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="miscellaneous-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
