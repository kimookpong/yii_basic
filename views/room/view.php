<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Bill;

/** @var yii\web\View $this */
/** @var app\models\Room $model */

$this->title = 'เลขที่ห้อง ' . $model->roomnum;
$this->params['breadcrumbs'][] = ['label' => 'จัดการห้องพัก', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="room-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

        <?= Html::a('ออกใบเสร็จ', ['bill/create', 'room_id' => $model->id], ['class' => 'btn btn-info text-white']) ?>

    </p>
    <div class="row">
        <div class="col-4">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'roomnum',
                    'tower',
                    'num',
                    'status',
                ],
            ]) ?>
        </div>
        <div class="col-8">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>ชื่อผู้ใช้</th>
                    <th>เดือน</th>
                    <th>ค่าน้ำ</th>
                    <th>ค่าไฟฟ้า</th>
                    <th>ค่าเช่า</th>
                </tr>

                <?php
                $i = 1;
                $model = Bill::find()->where(['room_id' => $model->id])->all();
                foreach ($model as $rows) {
                ?>
                    <tr>
                        <th><?= $i++ ?></th>
                        <th><?= $rows['name'] ?></th>
                        <th><?= $rows['my'] ?></th>
                        <th><?= $rows['water'] ?></th>
                        <th><?= $rows['elec'] ?></th>
                        <th><?= $rows['rent'] ?></th>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>


</div>