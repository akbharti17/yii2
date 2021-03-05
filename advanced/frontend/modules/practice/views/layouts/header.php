<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

NavBar::begin([
    'brandLabel' => 'Pratice Module',
    'brandUrl' => 'practice/site/index',
    'options' => [
        'class' => 'nav navbar-default nav-fixed-top',
    ]
]);

$menuItems = [
    ['label'=>'Home', 'url' => ['practice/site/index']],
];

if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label'=>Yii::$app->cache->get('count')];
    $menuItems[] = ['label'=>'Signup', 'url' => ['practice/site/signup']];
    $menuItems[] = ['label'=>'LogIn', 'url' => ['practice/site/signup']];
    $menuItems[]=  '<li>'.Html::a('Refesh',['refresh'],['class'=>'btn btn-info']).'</li>';
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
