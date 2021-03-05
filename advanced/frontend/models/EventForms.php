<?php

namespace frontend\models;

use yii;

use yii\db\ActiveRecord;
use frontend\component\customEvent;

class EventForms extends ActiveRecord
{

   
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

    public function event1()
    {
        echo "event1<br>";
    }
    public function event2()
    {
        echo "event2<br>";
    }


    public static function tableName()
    {
        return 'records';
    }

    public function events(){
        $obj = new CustomEvent();
        $obj->on(CustomEvent::EVENT, [$obj, 'data'], 'first event');
        $obj->on(CustomEvent::EVENT, [$obj, 'getdata'], 'second event');
        $obj->trigger(CustomEvent::EVENT);
    }
}
