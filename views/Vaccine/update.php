<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vaccine */

$this->title = 'Update Vaccine: ' . $model->IDvaccine;
$this->params['breadcrumbs'][] = ['label' => 'Vaccines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDvaccine, 'url' => ['view', 'id' => $model->IDvaccine]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vaccine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
