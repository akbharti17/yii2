<?php

namespace frontend\modules\practice\models;

use yii;

use yii\db\ActiveRecord;

class Variant extends ActiveRecord
{
    // public $variant_id;
    // public $price;
    // public $inventory;

    public $from;
    public $to;


    public function attributeLabels()
    {
        return [
            'variant_id' => 'Variant Id',
            'price' => 'Price',
            'inventory' => 'Inventory',
        ];
    }

    function rules()
    {
        return [
            [['id','product_id','variant_id','price','inventory'],'required'],
            [['id'],'integer'],
            [['product_id'],'integer'],
            [['inventory'],'integer'],
            [['from'],'integer'],
            [['to'],'integer'],
            
        ];
    }
    
    public static function tableName()
    {
        return 'variant';
    }
    public static function getDb() {
        return Yii::$app->db1;
    }

    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['product_id' => 'product_id']);
    }
   
}


