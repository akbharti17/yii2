<?php
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>

<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $this->head(); ?>
</head>

<body>

    <?php $this->beginBody(); ?>

    <div class="wrap">
        <?php
        echo $this->render('header');
        ?>
        <?= $content; ?>
    </div>



    <?php echo $this->render('footer'); ?>

    <?php $this->endBody(); ?>

</body>

</html>

<?php $this->endPage(); ?>