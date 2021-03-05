<?php
namespace frontend\modules\practice\component;
use frontend\modules\practice\models\Variants;
use frontend\modules\practice\models\ProductsSearch;

class Price {
    static function range($id){

        $max=ProductsSearch::find()->where(['product_id'=>$id])->max('variant.price');
        
        $min=ProductsSearch::find()->where(['product_id'=>$id])->min('variant.price');

        return $min.'-'.$max;
    }
}