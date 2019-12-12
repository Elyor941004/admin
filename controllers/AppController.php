<?php
	namespace app\controllers;
	use yii\web\Controller;

	
	class AppController extends Controller
	{
	    public function actionWeb() {
	        $vara = "O'zbekiston";
	        return $this->render('web',['var'=>$vara]);
        }
	}
?>