<?php

namespace frontend\modules\practice\component;

use yii;

class Check
{
    static function check_tbl($name)
    {
        $tableSchema = Yii::$app->db1->schema->getTableSchema($name);
        if ($tableSchema === null) {
            return true;
        } else {
            return false;
        }
    }

    static function check_col($col, $name)
    {
        $tableSchema = Yii::$app->db1->schema->getTableSchema($name);
        if (!isset($tableSchema->columns[$col])) {

            // Column doesn't exist
            return true;
        } else {
            return false;
        }
    }
    static function indcheck($name, $col)
    {
        $tableSchema = Yii::$app->db1->schema->getTableSchema($name);
        $unIndex = Yii::$app->db1->schema->findUniqueIndexes($tableSchema);

        foreach($unIndex as $k=>$v){
           if($k==$col){
               return true;
           }else{
               return false;
           }
        }

       
    }
}
