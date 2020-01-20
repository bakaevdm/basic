<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Procedures */

$this->title = 'Update Procedures: ' . $model->IDprocedure;
$this->params['breadcrumbs'][] = ['label' => 'Procedures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDprocedure, 'url' => ['view', 'id' => $model->IDprocedure]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="procedures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
