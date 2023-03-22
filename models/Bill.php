<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bill".
 *
 * @property int $id
 * @property int $room_id
 * @property string $date
 * @property string $my
 * @property int $water
 * @property int $elec
 * @property int $rent
 * @property string $name
 */
class Bill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'date', 'my', 'water', 'elec', 'rent', 'name'], 'required'],
            [['room_id', 'water', 'elec', 'rent'], 'integer'],
            [['date'], 'safe'],
            [['my'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_id' => 'รหัสห้องพัก',
            'date' => 'วันที่',
            'my' => 'เดือน',
            'water' => 'ค่าน้ำ',
            'elec' => 'ค่าไฟฟ้า',
            'rent' => 'ค่าเช่า',
            'name' => 'ชื่อลูกค้า',
        ];
    }
}
