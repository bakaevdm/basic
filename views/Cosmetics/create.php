<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cosmetics */

$this->title = 'Create Cosmetics';
$this->params['breadcrumbs'][] = ['label' => 'Cosmetics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cosmetics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
