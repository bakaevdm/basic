<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wool */

$this->title = 'Update Wool: ' . $model->IDwool;
$this->params['breadcrumbs'][] = ['label' => 'Wools', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDwool, 'url' => ['view', 'id' => $model->IDwool]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wool-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
