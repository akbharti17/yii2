<?php

use frontend\customwidgets\Newwidgets;
use frontend\assets\NewAsset;


NewAsset::register($this);
?>

<?php

?>
<div class="m2">
    <div class="m1">

        <?= Newwidgets::widget(['label1'=>'First Name','label2'=>'Last Name']); ?>
    </div>
</div>
<?php
$a = yii::getAlias('@app');
print_r($a."<br>");
print_r(yii::getAlias('@web')."<br>");
print_r(yii::getAlias('@webroot')."<br>");
print_r(yii::getAlias('@vendor')."<br>");
print_r(yii::getAlias('@console')."<br>");
print_r(yii::getAlias('@common')."<br>");

print_r(yii::getAlias('@homeroot')."<br>");
print_r(yii::getAlias('@home')."<br>");


?>