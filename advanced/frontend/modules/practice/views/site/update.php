<?php

use Symfony\Component\Console\Input\StringInput;
use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;


?>
<?php $form = ActiveForm::begin(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <?= $form->field($model, 'variant_id') ?>
            <?= $form->field($model, 'price') ?>
            <?= $form->field($model, 'inventory') ?>
            <div class="form-group">
                <?= Html::submitButton('update', ['class' => 'btn btn-primary form-control']) ?>
            </div>
        </div>
        <div class="col-sm-4">
       
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>

