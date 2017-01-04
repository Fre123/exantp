<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\bebidas */

$this->title = 'Create Bebidas';
$this->params['breadcrumbs'][] = ['label' => 'Bebidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bebidas-create">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= $this->render('_form', [
        'model' => $model,
     
    ]) ?>

</div>
