<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDpet') ?>

    <?= $form->field($model, 'IDbreed') ?>

    <?= $form->field($model, 'Nickname') ?>

    <?= $form->field($model, 'DoB') ?>

    <?= $form->field($model, 'Sex') ?>

    <?php // echo $form->field($model, 'Sterilization') ?>

    <?php // echo $form->field($model, 'IDwool') ?>

    <?php // echo $form->field($model, 'Weight') ?>

    <?php // echo $form->field($model, 'IDfeed') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
