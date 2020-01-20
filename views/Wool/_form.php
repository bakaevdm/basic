<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Wool */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wool-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TypeWool')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ColorWool')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDcosmetics')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
