<?php

namespace frontend\models;

use yii;

use yii\db\ActiveRecord;

class Records extends ActiveRecord
{


    public function attributeLabels()
    {
        return [
            'name' => 'Your name',
            'mobile' => 'Your Mobile Number',
            'email' => 'Enter your Email',
            'dob' => 'Enter Your Date of Birth',
            'image' => 'Upload Image',
            'password' => 'Password'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'mobile', 'email', 'dob', 'password'], 'required'],
            [['name'], 'string'],
            [['mobile'], 'integer'],
            [['email'], 'email'],
            [['image'], 'file'],
            // [['dob'], 'date'],

        ];
    }

    // public static function tableName()
    // {
    //     return 'records';
    // }
    // public static function getDb() {
    //     return Yii::$app->db1;
    // }
    
}
