<?php

use frontend\customwidgets\Newwidgets;
use frontend\assets\NewAsset;
$this->registerJsFile("@web/js/script.js",['position' => \yii\web\View::POS_BEGIN]);
$this->registerCssFile("@web/css/style.css"); 
?>

<?php

?>
<div class="m2">
<div class="m1">
    <?= Newwidgets::widget(); ?>
</div>
</div>
