<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property int $id
 * @property string $roomnum
 * @property int $tower
 * @property int $num
 * @property int $status
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['roomnum', 'tower', 'num', 'status'], 'required'],
            [['tower', 'num', 'status'], 'integer'],
            [['roomnum'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'roomnum' => 'เลขที่ห้องพัก',
            'tower' => 'อาคาร',
            'num' => 'ค่าเช่า',
            'status' => 'สถานะ',
        ];
    }
}
