<?php

return array(
    'name' => 'AppName',
    'language' => 'en',
    'sourceLanguage' => 'en_US',
    'aliases' => require(__DIR__ . '/aliases.php'),
    'import' => array(
        'common.components.*',
        'common.controllers.*',
        'common.models.*',
        'ext-global.yii-mail.YiiMailMessage',
        'application.components.*',
        'application.models.*',
    ),
    'components' => array(
        'authManager' => array(
            'class' => 'PhpAuthManager',
            'defaultRoles' => array('guest'),
            'authFile' => __DIR__ . '/../data/auth.php',
        ),
        'user' => array(
            'class' => 'WebUser',
            'loginUrl' => array('auth/login'),
            'allowAutoLogin' => true,
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'urlSuffix' => '.html',
            'showScriptName' => false,
            'rules' => require(__DIR__ . '/routes.php'),
        ),
        'db' => require(__DIR__ . '/db.php'),
        'cache' => array(
            'class' => 'system.caching.CApcCache',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error' . (YII_DEBUG ? ', warning, trace, info' : ''),
                ),
                array(
                    'class'=>'CWebLogRoute',
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
        'clientScript'=>array(
            'scriptMap'=>array(
                'jquery.min.js' => false,
                'jquery.js' => false,
                'jquery-ui.min.js' => false,
                'jquery-ui.js' => false,
            ),
        ),
    ),
    'params' => require(__DIR__ . '/params.php'),
);