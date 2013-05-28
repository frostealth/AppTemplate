<?php

return CMap::mergeArray(
    require(__DIR__ . '/../../common/config/main.php'),
    array(
        'basePath' => realpath(__DIR__ . '/../'),
        'import' => array(
            'common.components.*',
            'common.models.*',
            'ext-global.yii-mail.YiiMailMessage',
            'application.components.*',
            'application.models.*',
        ),
        'components' => array(
            'urlManager' => array(
                'urlFormat' => 'path',
                'urlSuffix' => '.html',
                'showScriptName' => false,
                'rules' => require(__DIR__ . '/routes.php'),
            ),
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                    array(
                        'class' => 'CFileLogRoute',
                        'levels' => 'error' . (YII_DEBUG ? ', warning, trace, info' : ''),
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
        ),
    )
);
