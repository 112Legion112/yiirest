<?php
namespace app\models;

use yii\db\ActiveRecord;

class UserTable extends ActiveRecord{

    public static function tableName()
    {
        return '{{%user}}';
    }

    public function rules()
    {
        return [
            [['id'], 'save'],
            [['name'], 'string'],
            ['email', 'email'],
        ];
    }
}