<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once(__DIR__ . '/../../framework/' . (YII_DEBUG ? 'yii.php' : 'yiilite.php'));
Yii::createWebApplication(__DIR__ . '/../config/main.php')->run();
