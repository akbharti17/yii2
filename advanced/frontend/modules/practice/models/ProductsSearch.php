<?php

namespace frontend\modules\practice\models;

use Yii;
use frontend\modules\practice\models\Products;
use frontend\modules\practice\models\Variant;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class ProductsSearch extends Variant
{
    public $title;
    public $from;
    public $to;
    public function rules()
    {
        
        return [
            [['id'], 'integer'],
            [['product_id', 'title','from','to','inventory'], 'safe'],
        ];
    }

  

    public function search($params)
    {
        $query = Variant::find()->joinWith(['product']);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            // 'sort' => ['attributes' => ['id', 'name', 'mobile', 'email']],
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->orFilterWhere(['variant.id' => $this->id]);
        $query->orFilterWhere(['=', 'variant.product_id', $this->product_id])
            ->orFilterWhere(['=', 'variant.inventory', $this->inventory])
            ->orFilterWhere(['=', 'title', $this->title])
            ->orFilterWhere(['between', 'variant.price', $this->from,$this->to]);
        return $dataProvider;
    }
}
