<?php

namespace frontend\modules\practice\controllers;

use yii;
use yii\web\Controller;
use yii\data\SqlDataProvider;
use frontend\modules\practice\models\Product;
use frontend\modules\practice\models\ProductsSearch;
use frontend\modules\practice\models\Search;
use frontend\modules\practice\models\Variant;
use frontend\modules\practice\models\Variants;

class SiteController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex()
	{
		// $this->layout = "main";
		// $obj=new Product();
		// $data=$obj->getVariant();
		// echo "<pre>";
		// print_r($data);
		// die;
		$count = Yii::$app->db1->createCommand('SELECT COUNT(*) FROM product INNER JOIN variant ON product.product_id=variant.product_id
		')->queryScalar();
		$searchModel = 1;
		$dataProvider = new SqlDataProvider([
			'db' => 'db1',
			'sql' => 'SELECT * FROM product INNER JOIN variant ON product.product_id=variant.product_id',
			'params' => [':status' => 1],
			'totalCount' => $count,
			'sort' => [
				'attributes' => [
					'title',
					'variant_id',
					'price',
					'inventory'
				],
			],
			'pagination' => [
				'pageSize' => 5,
			],
		]);
		return $this->render('index', ['dataProvider' => $dataProvider, 'searchModel' => $searchModel]);
		// // echo "hello";
		// return $this->render('index',['dataProvider'=>$data]);
	}


	public function actionView()
	{
		$this->layout = "main";

		$searchModel = new ProductsSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->get());

		// echo $model;
		if (Yii::$app->cache->get('count') == null) {
			$model = Variant::find()->count();
			Yii::$app->cache->set('count', $model);
		}
		// die;
		return $this->render('view', [
			'dataProvider' => $dataProvider,
			'searchModel' => $searchModel,
		]);
	}
	public function actionNewview()
	{
		$this->layout = "main";

		$searchModel = new ProductsSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->get());

		return $this->render('newview', [
			'dataProvider' => $dataProvider,
			'searchModel' => $searchModel,
		]);
	}

	public function actionBulk()
	{
		echo "hello";
		die;
		$path = Yii::getAlias('@mdpracticecsv');
		if (!file_exists("$path/data.csv")) {
			$file_handle = fopen("$path/data.csv", 'w');
			fputcsv($file_handle, array('id', 'title', 'product_id', 'variant_id', 'price', 'inventory'));
		}
		// $action = Yii::$app->request->post('action');
		$selection = (array)Yii::$app->request->post('selection'); //typecasting

		print_r($selection);

		die;
		foreach ($selection as $id) {
			// echo $id;
			$arr = Yii::$app->db1->createCommand("SELECT * FROM product INNER JOIN variant ON product.product_id=variant.product_id WHERE variant.id='$id'")->queryAll();
			// print_r($arr);

			$id = $arr[0]['id'];
			$title = $arr[0]['title'];
			$product_id = $arr[0]['product_id'];
			$variant_id = $arr[0]['variant_id'];
			$price = $arr[0]['price'];
			$inventory = $arr[0]['inventory'];
			if (file_exists("$path/data.csv")) {
				$file_handle = fopen("$path/data.csv", 'a+');
				fputcsv($file_handle, array($id, $title, $product_id, $variant_id, $price, $inventory));
			}
		}
		// die;
		fclose($file_handle);
		if (file_exists("$path/data.csv")) {
			Yii::$app->response->sendFile("$path/data.csv")->send();
			unlink("$path/data.csv");
		}
		$this->redirect(['view']);
	}


	function actionDelete($id, $y)
	{

		// echo $y;
		if ($y == 'yes') {
			Yii::$app->getSession()->setFlash('message', 'Record is deleted');
			$model = Variant::findOne($id)->delete();
		} else {
			Yii::$app->getSession()->setFlash('message', 'Record is Safe');
		}
		return $this->redirect(['view']);
	}

	function actionUpdate($id)
	{
		$this->layout = "main";
		$model = Variant::findOne($id);
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			// print_r($_POST);
			$model->save();
			// die;
			return $this->redirect('view');
		} else {
			return $this->render('update', ['model' => $model]);
		}
	}

	function actionRefresh()
	{
		$model = Variant::find()->count();
		Yii::$app->cache->set('count', $model);

		return $this->redirect(['view']);
	}

	public function actionSave($ids)
	{


		$path = Yii::getAlias('@mdpracticecsv');
		if (!file_exists("$path/data.csv")) {
			$file_handle = fopen("$path/data.csv", 'w');
			fputcsv($file_handle, array('id', 'title', 'product_id', 'variant_id', 'price', 'inventory'));
		} else {
			$file_handle = fopen("$path/data.csv", 'w');
			fputcsv($file_handle, array('id', 'title', 'product_id', 'variant_id', 'price', 'inventory'));
		}
		if ($ids == '') {
			// echo "all";
			$arr = Yii::$app->db1->createCommand("SELECT * FROM product INNER JOIN variant ON product.product_id=variant.product_id")->queryAll();
			$c = count($arr);
			for ($i = 0; $i < $c; $i++) {
				$id = $arr[$i]['id'];
				$title = $arr[$i]['title'];
				$product_id = $arr[$i]['product_id'];
				$variant_id = $arr[$i]['variant_id'];
				$price = $arr[$i]['price'];
				$inventory = $arr[$i]['inventory'];
				if (file_exists("$path/data.csv")) {
					$file_handle = fopen("$path/data.csv", 'a+');
					fputcsv($file_handle, array($id, $title, $product_id, $variant_id, $price, $inventory));
				}
				fclose($file_handle);
			}
			// die;
		} else {
			$arr = explode(",", $ids);
			foreach ($arr as $id) {
				// echo $id;
				$arr = Yii::$app->db1->createCommand("SELECT * FROM product INNER JOIN variant ON product.product_id=variant.product_id WHERE variant.id='$id'")->queryAll();
				// print_r($arr);

				$id = $arr[0]['id'];
				$title = $arr[0]['title'];
				$product_id = $arr[0]['product_id'];
				$variant_id = $arr[0]['variant_id'];
				$price = $arr[0]['price'];
				$inventory = $arr[0]['inventory'];
				if (file_exists("$path/data.csv")) {
					$file_handle = fopen("$path/data.csv", 'a+');
					fputcsv($file_handle, array($id, $title, $product_id, $variant_id, $price, $inventory));
				}
			}
			fclose($file_handle);
		}

		if (file_exists("$path/data.csv")) {
			$path = Yii::getAlias('@mdpracticecsv');
			Yii::$app->response->sendFile("$path/data.csv")->send();
			// unlink("$path/data.csv");
		}

		$this->redirect(['view']);
	}
}
