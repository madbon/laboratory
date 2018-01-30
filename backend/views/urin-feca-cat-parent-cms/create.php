<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatParentCms */

$this->title = 'Create Parent Category';
$this->params['breadcrumbs'][] = ['label' => 'Parent Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urin-feca-cat-parent-cms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
