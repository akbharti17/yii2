<?php

namespace app\modules\forum\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    function actionIndex(){
        $this->render('index');
    }
}
