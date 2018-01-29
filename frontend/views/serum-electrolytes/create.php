<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SerumElectrolytes */

$this->title = 'Create Serum Electrolytes';
$this->params['breadcrumbs'][] = ['label' => 'Serum Electrolytes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serum-electrolytes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
