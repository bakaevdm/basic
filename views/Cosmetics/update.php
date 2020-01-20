<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cosmetics */

$this->title = 'Update Cosmetics: ' . $model->IDcosmetics;
$this->params['breadcrumbs'][] = ['label' => 'Cosmetics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDcosmetics, 'url' => ['view', 'id' => $model->IDcosmetics]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cosmetics-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
