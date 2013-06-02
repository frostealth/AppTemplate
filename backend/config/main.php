<?php

return CMap::mergeArray(
    require(__DIR__ . '/../../common/config/main.php'),
    array(
        'basePath' => realpath(__DIR__ . '/../'),
        'name' => 'AppName Backend',
        'defaultController' => 'dashboard',
        'preload' => array('log'),
        'import' => array(
            'common.components.*',
            'common.controllers.*',
            'common.models.*',
            'ext-global.yii-mail.YiiMailMessage',
            'application.components.*',
            'application.models.*',
        ),
        'components' => array(
            'user' => array(
                'class' => 'WebUser',
                'loginUrl' => array('auth/login'),
                'allowAutoLogin' => true,
            ),
            'cache' => array(
                'class' => 'system.caching.CApcCache',
            ),
            'authManager' => array(
                'class' => 'PhpAuthManager',
                'defaultRoles' => array('guest'),
                'authFile' => realpath(__DIR__ . '/../data/auth.php'),
            ),
            'urlManager' => array(
                'urlFormat' => 'path',
                'urlSuffix' => '.html',
                'showScriptName' => false,
                'rules' => require(__DIR__ . '/routes.php'),
            ),
            'errorHandler' => array(
                'errorAction' => 'default/error',
            ),
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                    array(
                        'class' => 'CFileLogRoute',
                        'levels' => 'error' . (YII_DEBUG ? ', warning, trace, info' : ''),
                    ),
                    array(
                        'class' => 'CWebLogRoute',
                        'showInFireBug' => true,
                        'enabled' => YII_DEBUG,
                    ),
                ),
            ),
            'mail' => array(
                'class' => 'ext-global.yii-mail.YiiMail',
                'transportType' => 'php',
                'viewPath' => 'application.views.mail',
                'logging' => true,
                'dryRun' => false,
            ),
            'clientScript' => array(
                'scriptMap' => array(
                    'jquery.min.js' => false,
                    'jquery.js' => false,
                    'jquery-ui.min.js' => false,
                    'jquery-ui.js' => false,
                ),
            ),
        ),
        'params' => require(__DIR__ . '/params.php'),
    )
);