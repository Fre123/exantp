<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BebidasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bebidas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bebidas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bebidas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php echo GridView::widget([
    'dataProvider'=> $dataProvider,
    'filterModel' => $searchModel,
    'columns' => require(__DIR__.'/_columns.php'),
    'toolbar' => [
        '{toggleData}',
        '{export}',
    ], 
    'panel'=>[
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=>'Listado de Bebidas',
    ],
    'showPageSummary' => true


]);
   
 ?>
</div>
