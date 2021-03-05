<?php

namespace frontend\models;

use Yii;
use frontend\models\Data;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class DataSearch extends Data
{
    public function rules()
    {
        
        return [
            [['id'], 'integer'],
            [['name', 'mobile', 'email'], 'safe'],
        ];
    }

    // public function scenarios()
    // {
    //     // bypass scenarios() implementation in the parent class
    //     return Model::scenarios();
    // }

    public function search($params)
    {
        $query = Data::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['id', 'name', 'mobile', 'email']],
            'pagination' => [
                'pageSize' => 4,
            ],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

 
        $query->orFilterWhere(['id' => $this->id]);
        $query->orFilterWhere(['=', 'name', $this->name])
            ->orFilterWhere(['=', 'mobile', $this->mobile])
            ->orFilterWhere(['=','email',$this->email]);

        return $dataProvider;
    }
}
