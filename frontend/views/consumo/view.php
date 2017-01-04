<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $model frontend\models\Consumo */

$this->title = $model->IDCONSUMO;
$this->params['breadcrumbs'][] = ['label' => 'Consumos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDCONSUMO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDCONSUMO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estás seguro que quieres eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDCONSUMO',
            'IDPERSONA',
            'DESCONSUMO',
            'PRECIOCONSUMO',
        ],
    ]) ?>

</div>
