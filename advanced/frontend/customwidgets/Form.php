<?php

namespace  frontend\customwidgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii;

class Form extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {

        return Yii::$app->view->render('@app/views/first/myform', ['model' => $this->message]);
    }
}
