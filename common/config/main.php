<?php

return array(
    'language' => 'en',
    'sourceLanguage' => 'en_US',
    'timeZone' => 'Europe/Moscow',
    'aliases' => require(__DIR__ . '/aliases.php'),
    'params' => require(__DIR__ . '/params.php'),
    'components' => array(
        'db' => require(__DIR__ . '/db.php'),
    ),
);
