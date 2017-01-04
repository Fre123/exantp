<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

    'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],

    ],
    'modules' => [
    'rbac' =>  [
        'class' => 'johnitvn\rbacplus\Module'
    ],
    'gridview' =>  [
        'class' => '\kartik\grid\Module'
    ]     
    ],
];
