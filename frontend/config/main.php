<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',

   'modules' => [
   'gridview' =>  [
        'class' => '\kartik\grid\Module',
        //enter optional module parameters below - only if you need to
        //use your own export download action or custom translation
        //message source
        'downloadAction' => 'gridview/export/download',
        'i18n' => [
          'class' => 'yii\i18n\PhpMessageSource',
    'basePath' => '@kvgrid/messages',
    'forceTranslation' => true
    ],
    ]
],

    'components' => [

    'request' => [
       'csrfParam' => '_csrf-frontend',
       'parsers' => [
           'application/json' => 'yii\web\JsonParser',
       ]
    ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            //'showScriptName' => false,
            'rules' => [
              ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
              ['class' => 'yii\rest\UrlRule', 'controller' => 'consumoservice']
            ],
        ],

    ],
    'params' => $params,
];