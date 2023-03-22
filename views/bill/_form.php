<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Bill $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bill-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_id')->hiddenInput(['value' => $_GET['room_id']])->label(false) ?>

    <?= $form->field($model, 'date')->textInput(['value' => date('Y-m-d')]) ?>

    <?= $form->field($model, 'my')->textInput(['type' => "month"]) ?>

    <?= $form->field($model, 'water')->textInput() ?>

    <?= $form->field($model, 'elec')->textInput() ?>

    <?= $form->field($model, 'rent')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>