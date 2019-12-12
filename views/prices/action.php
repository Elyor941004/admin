<?php
namespace app\controllers;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

?>
<section id="sectionaksii">
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12 text-uppercase">
                <h1 style="color: #f7941e;">Акции</h1>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-12">
                <a href="<?=Url::to('prices') ?>" class="btn btn_outline">Цены</a>
                <a href="<?=Url::to('action') ?>" class="btn btnadd ml-4">Акции</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5">

                <img src="../../img/shablon/action_3.png" height="204" width="500"/>
                <h2>Приведи друга</h2>
                <h3>Срок проведения акции: <span>бессрочно</span></h3>
                <p>У вас есть друзья, которым интересны услуги нашей компании? За каждого клиента, пришедшего по вашей
                    рекомендации, мы дарим разовую скидку в размере <strong><br>5 000 рублей</strong>
                    на создание или продвижение сайта. </p>
            </div>
            <div class="col-md-5 offset-md-1 offset-0 mt-md-0 mt-3">
                <img src="../../img/shablon/action_4.png" height="204" width="500"/>
                <h2>По рекомендации</h2>
                <h3>Срок проведения акции: <span>бессрочно</span></h3>
                <p>Друзья или коллеги порекомендовали вам нашу веб-студию? Мы рады оказанному доверию и предоставляем
                    разовую скидку в размере <strong><br>5 000 рублей</strong>
                    на создание или продвижение сайта. Скидка действительна при подтверждении рекомендации действующим клиентом. </p>

            </div>
        </div>

    </div>
</section>