<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Breed */

$this->title = 'Update Breed: ' . $model->IDbreed;
$this->params['breadcrumbs'][] = ['label' => 'Breeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDbreed, 'url' => ['view', 'id' => $model->IDbreed]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="breed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
