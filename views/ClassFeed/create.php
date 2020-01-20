<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClassFeed */

$this->title = 'Create Class Feed';
$this->params['breadcrumbs'][] = ['label' => 'Class Feeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-feed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
