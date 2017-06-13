<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'aliases' => [
        '@adminlte/widgets'=>'@vendor/adminlte/yii2-widgets'
    ],
    'modules' => [
        'gallery' => [
            'class' => 'onmotion\gallery\Module',
        ],
        'redactor' => 'yii\redactor\RedactorModule',
    ],
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@vendor/onmotion/yii2-gallery/views/default' => '@app/views/gallery', // example: @app/views/gallery/default/index.php
                ],
            ],
        ],
        
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
         'authManager' =>[
            'class' => 'yii\rbac\DBManager',
            'defaultRoles' => ['guest'],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'as access' => [
        'class' => \yii\filters\AccessControl::className(),//AccessControl::className(),
        'rules' => [
            [
                'actions' => ['login', 'error'],
                'allow' => true,
            ],
            [
                'actions' => ['logout', 'index', 'view', 'create', 'show', 'update', 'signup', 'delete', 'galleryItem',
                    'fileupload', 'photos-delete', 
                ], // add all actions to take guest to login page
                'allow' => true,
                'roles' => ['@'],
            ],
        ],
    ],
    'params' => $params,
];
