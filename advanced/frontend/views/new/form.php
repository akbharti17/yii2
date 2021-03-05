<?php

use Symfony\Component\Console\Input\StringInput;
use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;


?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','autocomplete' => 'off']]); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'mobile') ?>
            <?= $form->field($model, 'email') ?>
            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary form-control']) ?>
            </div>
        </div>
        <div class="col-sm-4">
       
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>

