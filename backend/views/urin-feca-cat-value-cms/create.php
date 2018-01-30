<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatValueCms */

$this->title = 'Create Urin Feca Cat Value Cms';
$this->params['breadcrumbs'][] = ['label' => 'Urin Feca Cat Value Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urin-feca-cat-value-cms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
