<?php
use yii\helpers\Url;
use kartik\grid\GridView;
return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
      'class' => 'kartik\grid\SerialColumn',
      'width' => '30px',


    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'IDCONSUMO',
        'pageSummaryOptions' =>
        [
         'append' => 'Total'
        ]
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'IDPERSONA',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'DESCONSUMO',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'PRECIOCONSUMO',
        'pageSummary' => true,
        'pageSummaryFunc' => GridView::F_SUM
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) {
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete',
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Está seguro?',
                          'data-confirm-message'=>'Quiere eliminar este elemento'],
    ],

];
