<?php
namespace app\models;
use yii\db\ActiveRecord;

class Users_cars extends ActiveRecord{

    public static function tableName()
    {
        return 'users_cars';
    }

    public function rules()
    {
        return[
            [['id','users_id', 'cars_id'], 'required']
        ];
    }
}