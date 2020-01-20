<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDbreed')->textInput() ?>

    <?= $form->field($model, 'Nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DoB')->textInput() ?>

    <?= $form->field($model, 'Sex')->textInput() ?>

    <?= $form->field($model, 'Sterilization')->textInput() ?>

    <?= $form->field($model, 'IDwool')->textInput() ?>

    <?= $form->field($model, 'Weight')->textInput() ?>

    <?= $form->field($model, 'IDfeed')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
