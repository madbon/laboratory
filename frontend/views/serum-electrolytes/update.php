<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SerumElectrolytes */

$this->title = 'Update Serum Electrolytes: ' . $model->serum_electrolytes_c;
$this->params['breadcrumbs'][] = ['label' => 'Serum Electrolytes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->serum_electrolytes_c, 'url' => ['view', 'id' => $model->serum_electrolytes_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="serum-electrolytes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
