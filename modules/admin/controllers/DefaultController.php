<?php

namespace app\modules\admin\controllers;


use Yii;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends BaseController
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
