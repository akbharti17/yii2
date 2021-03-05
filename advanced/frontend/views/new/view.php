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
        'name',
        'email',
        'mobile',
        'image',
        [
            'class' => 'yii\grid\ActionColumn',
            'header' => 'Action',
            'template'=>'{view} {update}{delete}',
        ],
        
    ],
]);
