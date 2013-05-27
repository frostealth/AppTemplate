<?php

return CMap::mergeArray(
    require(__DIR__ . '/../../common/config/main.php'),
    array(
        'basePath' => __DIR__ . '/../',
        'defaultController' => 'default',
        'components' => array(
            'urlManager' => array(
                'rules' => require(__DIR__ . '/routes.php'),
            ),
            'errorHandler' => array(
                'errorAction' => 'default/error',
            ),
            'widgetFactory' => array(
                'widgets' => array(
                    'CCaptcha' => array(
                        'captchaAction' => '/default/captcha',
                        'showRefreshButton' => false,
                        'clickableImage' => true,
                        'id' => 'captcha',
                    ),
                ),
            ),
        ),
        'params' => require(__DIR__ . '/params.php'),
    )
);