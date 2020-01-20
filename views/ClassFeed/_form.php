<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClassFeed */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-feed-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ClassName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
