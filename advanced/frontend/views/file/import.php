<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'file')->fileInput() ?>
<?= Html::submitButton('Import', ['class' => 'btn btn-primary']) ?>
<?= Html::a('Export', ['export',], ['class' => 'btn btn-info']) ?>

<?php ActiveForm::end() ?>