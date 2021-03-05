<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

NavBar::begin([
    'brandLabel' => 'Examination dashboard',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'nav navbar-default nav-fixed-top',
    ]
]);

$menuItems = [
    ['label'=>'Home', 'url' => ['/site/index']],
    ['label'=>'About', 'url' => ['/site/about']],
    ['label' => 'Main Exam', 'url' => ['/main-exam/question-ans']],
    ['label' => 'View Records', 'url' => ['/first/view']],
    ['label' => 'Insert Records', 'url' => ['/first/form']],
    ['label'=>'Contact Us', 'url' => ['site/contact']]
];

if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label'=>'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label'=>'LogIn', 'url' => ['/site/login']];
} else {
    $menuItems = '<li>' . Html::beginForm(['/site/logout'], 'post') .
        Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout']
        )
        . Html::endForm()
        . '</li>';
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);
NavBar::end();
