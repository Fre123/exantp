<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\bebidas */

$this->title = 'Update Bebidas: ' . $model->idBebida;
$this->params['breadcrumbs'][] = ['label' => 'Bebidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idBebida, 'url' => ['view', 'id' => $model->idBebida]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bebidas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
