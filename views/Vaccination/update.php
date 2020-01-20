<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vaccination */

$this->title = 'Update Vaccination: ' . $model->IDvaccination;
$this->params['breadcrumbs'][] = ['label' => 'Vaccinations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDvaccination, 'url' => ['view', 'id' => $model->IDvaccination]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vaccination-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
