<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wool */

$this->title = 'Create Wool';
$this->params['breadcrumbs'][] = ['label' => 'Wools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wool-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
