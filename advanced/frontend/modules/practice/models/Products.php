<?php

namespace frontend\modules\practice\models;

use yii;

use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

class Products extends ActiveRecord
{


    // public function getVariant()
    // {
    //     return $this->hasOne(Variants::className(), ['product_id' => 'product_id']);
    // }
    public static function tableName()
    {
        return 'product';
    }
    public static function getDb()
    {
        return Yii::$app->db1;
    }
}
