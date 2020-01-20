<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClassFeed */

$this->title = 'Update Class Feed: ' . $model->IDclass;
$this->params['breadcrumbs'][] = ['label' => 'Class Feeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDclass, 'url' => ['view', 'id' => $model->IDclass]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="class-feed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
