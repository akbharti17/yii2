<?php

namespace frontend\component;

use phpDocumentor\Reflection\Types\Static_;
use yii;
class Insert
{
    public static function getQuery($sql)
    {
        Yii::$app->db->createCommand($sql)->execute();
        Yii::$app->db1->createCommand($sql)->execute();
    }

    public static function insert($sql)
    {
        Yii::$app->db->createCommand($sql)->execute();
        // Yii::$app->db1->createCommand($sql)->execute();
    }

    public static function getdata(){
        $data=Yii::$app->db->createCommand("SELECT * FROM `dommy`")->queryAll();
        return $data;
    }
    public static function getId(){
        $data=Yii::$app->db->createCommand("SELECT `id` FROM `dommy`")->queryAll();
        return $data;
    }

    public static function createdir($path){
       
        if(!is_dir($path))
         {
             mkdir($path, 0777);
         }else{
             echo "Already exist";
         }
     }
}
