<?php

namespace app\controllers;
use app\models\SiteContents;
use app\models\GeneralContent;
use app\models\OurAdvantages;
use app\models\AboutStudioContents;
use app\models\Pricesites;



class ServicesController extends \yii\web\Controller
{
    public function actionAdvertisement()
    {
    $generalcontent = GeneralContent::getContents('Контекстная реклама');
    $generalcontents = GeneralContent::getContents('Контекстная реклама этапы работы');
        return $this->render('advertisement',['generalcontent'=>$generalcontent, 'generalcontents'=>$generalcontents]);
    }
    public function actionMakingsites()
    {
         $sitecontent = SiteContents::getContents('Создание сайтов преимущества наших сайтов');
        $ouradvantages = OurAdvantages::getContents('Создание сайтов какие сайты мы создаем');
        $sitecontents = SiteContents::getContents('Создание сайтов каким должен быть хороший сайт?');
        $generalcontents = GeneralContent::getContents('Создание сайтов при разработке сайтов мы гарантируем');
        $generaltext = GeneralContent::getContent('Создание сайтов техт');
        $makingsites = OurAdvantages::getContent('Создание сайтов');
        $pricesites = Pricesites::getContents('Стоимость создания сайтов');

        return $this->render('makingsites',['sitecontents'=>$sitecontents,'sitecontent'=>$sitecontent, 'generalcontents'=>$generalcontents,
            'generaltext'=>$generaltext, 'makingsites'=> $makingsites , 'ouradvantages'=>$ouradvantages,'pricesites'=>$pricesites]);
    }
	public function actionSitesupport()
    {
        $generalcontent = GeneralContent::getContents('Поддержка сайта');
        $generalcontents = GeneralContent::getContents('Поддержка сайта этапы работы');
        return $this->render('sitesupport',['generalcontent'=>$generalcontent, 'generalcontent'=>$generalcontent, 'generalcontents'=>$generalcontents]);
    }
    public function actionSmm()
    {
        $ouradvantages = OurAdvantages::getContents('Система продвижения SMM актуальна при:');
        $ouradvantage = OurAdvantages::getContent('SMM');
        return $this->render('smm',['ouradvantages'=> $ouradvantages, 'ouradvantage'=> $ouradvantage]);
    }
    public function actionSeo()
    {
        $generalcontent = GeneralContent::getContent('Жирный техт SEO');
        $generalcontents = GeneralContent::getContent('техт SEO');
        $seodowntext = GeneralContent::getContent('Нижный техт SEO');
        $ouradvantages = OurAdvantages::getContents('Мы предоставляем своим клиентам:');
        return $this->render('seo',['generalcontent'=> $generalcontent, 'generalcontents'=> $generalcontents, 'ouradvantages'=>$ouradvantages, 'seodowntext'=>$seodowntext]);

    }

}

