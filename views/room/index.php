<?php

use app\models\Room;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'จัดการห้องพัก';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มห้องพัก', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row">


        <?php
        $i = 1;
        $model = room::find()->all();
        foreach ($model as $rows) {
        ?>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-white bg-<?= $rows['status'] == 1 ? 'success' : 'danger' ?>">
                        <h5 class="card-title">เลขที่ห้องพัก <?= $rows['roomnum'] ?></h5>
                        <p class="card-text"> ค่าเช่า <?= $rows['num'] ?> บาท</p>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'roomnum',
            'tower',
            'num',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Room $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>