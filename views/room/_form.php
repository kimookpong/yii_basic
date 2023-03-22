<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Room $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-6"><?= $form->field($model, 'roomnum')->textInput(['maxlength' => true]) ?></div>
        <div class="col-6"> <?= $form->field($model, 'tower')->textInput() ?></div>
        <div class="col-6"> <?= $form->field($model, 'num')->textInput() ?></div>
        <div class="col-6"></div>
        <div class="col-6"> <?php
                            echo $form->field($model, 'status')->dropDownList(
                                [1 => 'ว่าง', 2 => 'มีคนเข้าพัก', 3 => 'ปิดปรับปรุง']
                            ); ?></div>

    </div>







    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>