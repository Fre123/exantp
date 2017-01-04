<?php

/* @var $this yii\web\View */
use frontend\models\Bebidas;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;


$this->title = 'My Yii Application';
?>
<div class="site-index">
  <!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="http://www.bestfon.info/images/joomgallery/originals/comida_9/comida_45_20120413_1785090023.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Bebidas</h1>
          <p>Consumo de <code>Bebidas</code> saludables</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Consumir</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="second-slide" src="http://www.bestfon.info/images/joomgallery/originals/comida_9/comida_45_20120413_1785090023.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Bebidas</h1>
          <p>Consumo de <code>Bebidas</code> saludables</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Consumir</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="second-slide" src="http://www.bestfon.info/images/joomgallery/originals/comida_9/comida_45_20120413_1785090023.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Bebidas</h1>
          <p>Consumo de <code>Bebidas</code> saludables</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Consumir</a></p>
        </div>
      </div>
    </div>

  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- /.carousel -->
</div>
