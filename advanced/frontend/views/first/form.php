<?php

use Symfony\Component\Console\Input\StringInput;
use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use frontend\customwidgets\Form;


?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','autocomplete' => 'off']]); ?>

<div class="container">
   
    <?= Form::widget(['message'=>$model]); ?>
</div>

<?php ActiveForm::end(); ?>

