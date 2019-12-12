<?php

namespace app\controllers;

class PricesController extends \yii\web\Controller
{
    public function actionAction()
    {
        return $this->render('action');
    }
    public function actionPrices()
    {
        return $this->render('prices');
    }

}
