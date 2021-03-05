<?php

use frontend\customwidgets\Newwidgets;
use frontend\assets\NewAsset;

$css = "
.m1{
    margin: 0 auto;
    width: 50%;
    padding: 20px;
    height: 300px;
    background-color: bisque;
}
input[type=text]{
    width: 60%;
    padding: 10px;
    border-radius: 10px;
}
input[type=button]{
    width: 60%;
    padding: 10px;
    border-radius: 10px;
}
.m2{
    text-align: center;
}
";
$js="
function myFun(){
    let fname=document.getElementById('fname').value;
    let lname=document.getElementById('lname').value;
    alert('hello  '+fname+'  '+lname);
}
";
$this->registerJs($js);
$this->registerCss($css);
?>

<?php

?>
<div class="m2">
    <div class="m1">

        <?= Newwidgets::widget(); ?>
    </div>
</div>