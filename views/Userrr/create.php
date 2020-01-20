<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userrr */

$this->title = 'Create Userrr';
$this->params['breadcrumbs'][] = ['label' => 'Userrrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userrr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
