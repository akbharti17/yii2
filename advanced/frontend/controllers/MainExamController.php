<?php

namespace frontend\controllers;

use yii\web\Controller;

class MainExamController extends Controller
{

   function actionQuestionAns()
   {
      $this->layout = 'nav';
      return $this->render("question");
   }
}
