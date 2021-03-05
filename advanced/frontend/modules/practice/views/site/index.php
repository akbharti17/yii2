<?php

use yii\grid\GridView;
// use yii\grid\ActionColumn;


echo GridView::widget([
    'dataProvider' => $dataProvider,
    // 'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\CheckboxColumn'],
        [
            'class' => 'yii\grid\SerialColumn',
            'header' => 'Sr.No'
        ],
       
        'product_id',
        'title',
        'variant_id',
        'price',
        'inventory',
        [
            'class' => 'yii\grid\ActionColumn',
            'header' => 'Action',
            'template'=>'{view} {update}{delete}',
        ],
        
    ],
]);