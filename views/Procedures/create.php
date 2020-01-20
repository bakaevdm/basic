<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Procedures */

$this->title = 'Create Procedures';
$this->params['breadcrumbs'][] = ['label' => 'Procedures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="procedures-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
