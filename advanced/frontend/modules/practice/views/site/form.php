
<?php
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['action'=>'view','method'=>'get']); ?>
 <?= $form->field($model, 'from') ?>
 <?= $form->field($model, 'to') ?>
 <?php $form = ActiveForm::end(); ?>