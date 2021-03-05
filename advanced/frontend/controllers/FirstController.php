<?php

namespace frontend\controllers;

use yii;
use yii\web\Controller;
use app\components;
use app\models\Gettbl;
use frontend\models\Records;
use yii\web\UploadedFile;
use frontend\component\insert;
// use check;

class FirstController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionPage()
    {
        $this->layout = 'mynav';
        return $this->render("page");
    }
    public function actionPage1()
    {
        $this->layout = 'mynav';
        return $this->render("page1");
    }
    public function actionPage2()
    {
        $this->layout = 'mynav';
        return $this->render("page2");
    }

    public function actionForm()
    {
        $model = new Records();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // print_r($model->name);
            // die();
            $model->image = UploadedFile::getInstance($model, 'image');
            $filename = time() . '.' . $model->image->extension;
            $model->image->saveAs('images/' . $filename);
            $model->image = 'images/' . $filename;
            $sql = "INSERT INTO `records`(`name`, `mobile`, `email`, `dob`, `image`, `password`)
             VALUES ('$model->name','$model->mobile','$model->email','$model->dob','$model->image','$model->password')";
            // $model->save();
            Insert::getQuery($sql);

            // ['data' => $models]
            Yii::$app->getSession()->setFlash('message', 'Data inserted successfully');
            return $this->render('view');
        } else {
            return $this->render('form', ['model' => $model]);
        }
    }


    public function actionView()
    {
        return $this->render('view');
    }

    function actionDelete($id)
    {
        $model = Records::findOne($id);
        $model->delete();
        if ($model) {
            Yii::$app->getSession()->setFlash('message', 'Record Deleted Successfully');
            return $this->redirect(['view']);
        }
    }

    function actionUpdate($id)
    {
        $model = Records::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->image = UploadedFile::getInstance($model, 'image');
            $filename = time() . '.' . $model->image->extension;
            $model->image->saveAs('images/' . $filename);
            $model->image = 'images/' . $filename;
            $model->save();
            $models = Records::find()->all();
            Yii::$app->getSession()->setFlash('message', 'Record Updated Successfully');
            return $this->render('view', ['data' => $models]);
        } else {
            return $this->render('form', ['model' => $model]);
        }
    }

    function actionGetData()
    {
        $data = json_decode($_POST['data']);
        // print_r($data);
        echo $data->name."<br>";
        echo $data->email."<br>";
        echo $data->dob."<br>";
        echo $data->mobile."<br>";
        echo $data->image."<br>";
        echo $data->password."<br>";
        $sql = "INSERT INTO `records`(`name`, `mobile`, `email`, `dob`, `image`, `password`)
        VALUES ('$data->name','$data->mobile','$data->email','$data->dob','$data->image','$data->password')";
       // $model->save();
       Insert::getQuery($sql);
    }

    function actionPostData()
    {
        $model = new Records();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->image = UploadedFile::getInstance($model, 'image');
            $filename = time() . '.' . $model->image->extension;
            $model->image->saveAs('images/' . $filename);
            $model->image = 'images/' . $filename;

            $url = "http://localhost/Training/advanced/frontend/web/first/get-data";
            $data = array('name' => $model->name, 'email' => $model->email, 'mobile' => $model->mobile,'dob'=>$model->dob,'image'=>
        $model->image,'password'=>$model->password);
            $data_string = json_encode($data);
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, array("data" => $data_string));
            $response = curl_exec($ch);
            curl_close($ch);
        } else {
            return $this->render('post-data', ['model' => $model]);
        }
    }

    function actionCache($id)
    {
        Yii::$app->cache->delete('d');
        $models = Records::find()->all();
        Yii::$app->cache->set('d', $models);
        return $this->redirect('view');
    }
}
