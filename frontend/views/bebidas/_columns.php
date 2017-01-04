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
        'pageSummaryOptions' => 
        [
         'append' => 'Total'
        ]
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'idBebida',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'descripcionBebida',
    ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'precio',
        'pageSummary' => true,
        'pageSummaryFunc' => GridView::F_SUM
        
   

    ],
    [
      'class' => 'kartik\grid\ActionColumn',
      'dropdown' => false,
    ],  


];   