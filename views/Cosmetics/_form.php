<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cosmetics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cosmetics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CosmeticsName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CosmeticsType')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
