<?php

namespace app\controllers;
use app\models\AboutStudioContent;
use app\models\OurAdvantages;
use app\models\OurTeam;
use app\models\OurPartners;
use app\models\ReviewsAboutUs;
use app\models\Vacancies;
use app\models\UploadedFile;
use app\models\Subvacancies;
use app\models\GeneralContent;
use app\models\Adress;

class AboutStudioController extends \yii\web\Controller
{
    public function actionAbout_us()
    {
        $a=AboutStudioContent::getContent('Страница о студии');
        $p=OurAdvantages::getContents('Наши преимущества');

        return $this->render('about_us',['aboutstudio'=>$a, 'ouradvantages'=>$p]);

    }
     public function actionCommands()
    {   $team=OurTeam::find()->all();

        return $this->render('commands',['ourteam'=>$team]);
    }
     public function actionPartners()
     {
         $ourpartners=OurPartners::find()->all();
        return $this->render('partners',['partners'=>$ourpartners]);
    }
     public function actionReviews()
     {
         $ourreviews = ReviewsAboutUs::find()->all();

         return $this->render('reviews', ['reviews' => $ourreviews]);
     }
     public function actionVacancies()
    {
        $ourvacancies = Vacancies::find()->all();
//        $subvacancies = Subvacancies::find()->all();
        $generalcontent = GeneralContent::getContents('Условия');
        $adress = Adress::getContents('Условия');
        return $this->render('vacancies', ['vacancies' => $ourvacancies, 'adress' =>$adress, 'subvacancies' => $subvacancies, 'generalcontent'=>$generalcontent]);
    }
}
