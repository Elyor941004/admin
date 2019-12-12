<?php
	namespace app\controllers;
	use yii\web\Controller;

	
	class PostController extends AppController
	{
		public function actionIndex(){
			$hello="Hello World";
			return $this->render('index',['var'=>$hello]);
		}
	}
?>