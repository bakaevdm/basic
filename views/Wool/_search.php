<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WoolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wool-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDwool') ?>

    <?= $form->field($model, 'TypeWool') ?>

    <?= $form->field($model, 'ColorWool') ?>

    <?= $form->field($model, 'IDcosmetics') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
