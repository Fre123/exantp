<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;
use yii\data\ArrayDataProvider;
use frontend\models\User;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ConsumoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consumos';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="consumo-index">
<!--https://www.sitepoint.com/rendering-data-in-yii-2-with-gridview-and-listview/ -->
    <div id="ajaxCrudDatatable">

      <?php

        //$data = User::find()->where(['id'=> Yii::$app->user->identity->id])->all();


        //$dataProvide = new ArrayDataProvider([
        //    'allModels' => $data,
        //    'pagination' => [
        //        'pageSize' => 10,
        //    ],
        //    'sort' => [
        //        'attributes' => ['IDPERSONA'],
        //    ],
        //]);

        echo GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' =>   $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
                ['content'=>
                    Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'],
                    ['role'=>'modal-remote','title'=> 'Create new Consumos','class'=>'btn btn-default']).
                    Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                    ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
                    '{toggleData}'.
                    '{export}'
                ],
            ],
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'panel' => [
                'type' => 'primary',
                'heading' => '<i class="glyphicon glyphicon-list"></i> Listado de consumos',
                'before'=>'<em>* Listado de consumos.</em>',
                'after'=>BulkButtonWidget::widget([
                            'buttons'=>Html::a('<i class="glyphicon glyphicon-trash"></i>&nbsp; Delete All',
                                ["bulk-delete"] ,
                                [
                                    "class"=>"btn btn-danger btn-xs",
                                    'role'=>'modal-remote-bulk',
                                    'data-confirm'=>true, 'data-method'=>true,// for overide yii data api
                                    'data-request-method'=>'post',
                                    'data-confirm-title'=>'Eliminar elemento?',
                                    'data-confirm-message'=>'Está seguro que quiere eliminar este elemento'
                                ]),
                        ]).
                        '<div class="clearfix"></div>',
            ],
            'showPageSummary' => true
        ]);
        ?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
