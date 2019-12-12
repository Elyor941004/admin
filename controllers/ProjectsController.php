<?php

namespace app\controllers;
use app\models\SiteContents;
use app\models\GeneralContent;

class ProjectsController extends \yii\web\Controller
{
    public function actionDevelopmentsites()
    { 
    	$sitecontents = SiteContents::getContents('Проекты');
    	$generalcontent = GeneralContent::getContent('Проекты');

        return $this->render('developmentsites',['sitecontents'=>$sitecontents, 'generalcontent'=>$generalcontent]);
    }

}
