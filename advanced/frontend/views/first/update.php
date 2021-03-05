<?php

use Symfony\Component\Console\Input\StringInput;
use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'mobile') ?>
            <?= $form->field($model, 'email') ?>           
            <?= $form->field($model, 'dob') ?>
            <?= $form->field($model, 'image')->fileInput() ?>
            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Update', ['class' => 'btn btn-primary form-control']) ?>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<?php ActiveForm::end(); ?>


<!-- <?php print_r($_POST); ?> -->




