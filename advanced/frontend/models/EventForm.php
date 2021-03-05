<?php

namespace frontend\models;

use yii;

use yii\db\ActiveRecord;

class EventForm extends ActiveRecord
{
  
    const EVENT='user';

    public function init(){
        $this->on(self::EVENT, [$this, 'event1']);
        $this->on(self::EVENT, [$this, 'event2']);
        parent::init();
      }


    public function attributeLabels()
    {
        return [
            'name' => 'Your name',
            'mobile' => 'Your Mobile Number',
            'email' => 'Enter your Email',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'mobile', 'email',], 'required'],
            [['name'], 'string'],
            [['mobile'], 'integer'],
            // [['dob'], 'date'],

        ];
    }

    public function event1(){
        echo "event1<br>";
    }
    public function event2(){
        echo "event2<br>";
    }


    public static function tableName()
    {
        return 'records';
    }
}
