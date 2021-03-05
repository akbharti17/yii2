<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use frontend\modules\practice\component\Price;
use yii\widgets\Pjax;
use yii\helpers\Url;


// use yii\grid\ActionColumn;

$this->registerJsFile("@web/js/main.js", ['depends' => [\yii\web\JqueryAsset::className()]]);

?>

<div class="container">
    <?php
    if (yii::$app->session->hasFlash('message')) {
    ?>
        <div class="alert alert-success alert-dismissible my-3">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo yii::$app->session->getFlash('message'); ?>
        </div>
    <?php
    }

    ?>
</div>

<div class="container">
    <!-- <?php Pjax::begin([
                'id' => 'pjax_one',
                'timeout' => false,
                'enablePushState' => true,
                'clientOptions' => ['method' => 'get']
            ]); ?> -->

    <?= Html::beginForm(['site/bulk'], 'post'); ?>
    <?= Html::Button('Export', ['class' => 'btn btn-success', 'id' => 'export']); ?>
    <?php
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\CheckboxColumn',
                // 'id'=>'check',
                'checkboxOptions' => function ($dataProvider, $key, $index, $column) {
                    return ['value' => $dataProvider->id];
                },
                // 'content'=>function ($dataProvider, $key, $index, $column) {
                //     return ['value' => $dataProvider->index];
                // }
            ],

            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'Sr.No'
            ],
            'id',
            'product_id',
            [
                'attribute' => 'title',
                'value' => 'product.title'
            ],

            'variant_id',
            // 'price',
            [
                'attribute' => 'price',
                'filter' => $this->render('form', ['model' => $searchModel]),
                'value' => function ($model) {
                    return Price::range($model->product_id);
                }

            ],
            'inventory',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'template' => '{update}{delete}',
                'urlCreator'     => function ($action, $model, $key, $index) {
                    if ($action == 'delete') {
                        $url = Url::to(['delete', 'id' => $model->id]);
                        Yii::$app->cache->set('url', $url);
                        Yii::$app->cache->set('id', $model->id);
                        return $url;
                    } else {
                        $url = Url::to(['update', 'id' => $model->id]);
                        Yii::$app->cache->set('url', $url);
                        return $url;
                    }
                },
                'buttons' => [
                    'delete' => function ($url, $model) {
                        return Html::a('delete', $url, [
                            // 'class' => '... popup-modal',
                            'data-toggle' => 'modal',
                            'data-target' => '#modal-delete',
                            'data-id' => $model->id,
                            'id' => 'popupModal-' . $model->id,
                            ''
                        ]);
                    },
                ]
            ],

        ],
    ]);
    ?>
    <?= Html::endForm(); ?>
    <!-- <?php Pjax::end(); ?> -->
</div>

<?php Modal::begin([

    'header' => '<h2 class="modal-title"></h2>',
    'id'     => 'modal-delete',
    'footer' => Html::button('Delete', [
        'class' => 'btn btn-danger', 'id' => 'delete-confirm',
        // 'data-toggle' => 'modal',
        'data-target' => '#myModal',
        // 'data' => [
        //     'confirm' => 'Are you sure you want to delete this item?',
        // ]
    ]),
    'closeButton' => [
        'label' => 'Cancel',
        'class' => 'btn btn-info btn-sm pull-right',
    ],

]); ?>

<?= 'Want to delete?'; ?>

<?php Modal::end(); ?>





<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body">
                <h3 class="text-center">Are you sure if Yes then enter yes otherwise no </h3>
                <form action="delete">
                    <input type="hidden" placeholder="yes/no" name="id" value="<?php echo Yii::$app->cache->get('id'); ?>">
                    <p><input type="text" class="form-control" id="in" placeholder="yes/no" name="y" autocomplete="off"></p>
                    <p><input type="submit" value="action" id='s' class="btn btn-info"></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>