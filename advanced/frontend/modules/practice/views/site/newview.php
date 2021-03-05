<?php

use yii\grid\GridView;
// use yii\grid\ActionColumn;


echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
            'header' => 'Sr.No'
        ],
        'id',
        [
            'attribute'=>'title',
            'title'=>'product.title'
        ],
        'product_id',
        [
            'attribute'=>'variant_id',
            'value'=>'variant.variant_id'
        ],
        [
            'attribute'=>'price',
            'value'=>'variant.price'
        ],
        [
            'attribute'=>'inventory',
            'value'=>'variant.inventory'
        ],
    //     [
    //         'class' => 'yii\grid\ActionColumn',
    //         'header' => 'Action',
    //         'template'=>'{view} {update}{delete}',
    //     ],
        
    ],
]);
