<?php

namespace app\controllers;

class MainPageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
