<?php

namespace app\controllers;

class ContactsController extends \yii\web\Controller
{
    public function actionContact()
    {
        return $this->render('contact');
    }

}
