<?php

namespace app\controllers;

use Yii;
use app\models\Order;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class OrderController extends Controller
{

    public function actionIndex()
    {
        $model = new Order();
            $request =Yii::$app->request->post();
        if ($model->load($request, '') && $model->save()){
            Yii::$app->mailer->compose()
                ->setFrom('asiagroups05.02@gmail.com')
                ->setTo('ernazarovelyor941004@gmail.com')
                ->setSubject('Тема сообщения')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();
            return $this->redirect(Yii::$app->request->referrer);
            //session success saved
        }


    }

}
