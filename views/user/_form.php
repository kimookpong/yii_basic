<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-4">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'password')->textInput(['type' => 'password']) ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-6">
            <?= $form->field($model, 'role')->dropDownList(
                [1 => 'ผู้ใช้งานทั่วไป', 10 => 'แอดมิน']
            ); ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'status')->dropDownList(
                [1 => 'ใช้งาน', 0 => 'ไม่ใช้งาน']
            ); ?>
        </div>
    </div>







    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>