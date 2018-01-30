<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UrinFecaCatChildCms */

$this->title = 'Create Urin Feca Cat Child Cms';
$this->params['breadcrumbs'][] = ['label' => 'Urin Feca Cat Child Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urin-feca-cat-child-cms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'parent_category' => $parent_category,
        'sub_category' => $sub_category,
    ]) ?>

</div>
