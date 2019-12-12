<?php

namespace app\controllers;

use yii\db\Command;

class OurCommandController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionElyor()
    {
        $t="djfkfjk";
        return $this->render('elyor', ['var'=>$t]);
    }

}

