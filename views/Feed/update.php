<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Feed */

$this->title = 'Update Feed: ' . $model->IDfeed;
$this->params['breadcrumbs'][] = ['label' => 'Feeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDfeed, 'url' => ['view', 'id' => $model->IDfeed]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="feed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
