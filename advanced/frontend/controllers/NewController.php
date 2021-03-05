<?
namespace frontend\controllers;

use yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use frontend\models\DataSearch;
use frontend\component\customEvent;
use frontend\models\EventForm;
use frontend\models\EventForms;
class NewController extends Controller{

    function actionView(){
        
       $searchModel = new DataSearch();
       $dataProvider = $searchModel->search(Yii::$app->request->get());
    //    echo "<pre>";
    //    print_r($dataProvider);
    //    die;
        return $this->render('view', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }


    function actionCustomEve(){
        $obj=new CustomEvent();

        $obj->events();

        // $obj->on(CustomEvent::EVENT,[$obj,'data'],'first event');
        // $obj->on(CustomEvent::EVENT,[$obj,'getdata'],'second event');
        // $obj->on(CustomEvent::EVENT, function () {
        //     echo "callback event<br>";
        // });
        // $obj->trigger(CustomEvent::EVENT);
        // $obj->off(CustomEvent::EVENT,[$obj,'data']);
        // $obj->on(CustomEvent::EVENT,[$obj,'getdata']);
       
    }

    public function actionForm()
    {
        $model = new EventForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->trigger(EventForm::EVENT);      
        } else {
            return $this->render('form', ['model' => $model]);
        }
    }

    public function actionForms()
    {
        $model = new EventForms();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->events();      
        } else {
            return $this->render('forms', ['model' => $model]);
        }
    }


    

}