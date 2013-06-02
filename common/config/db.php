<?php

return array(
    'connectionString'      => 'mysql:host=localhost;dbname=example',
    'username'              => 'somebody',
    'password'              => '',
    'charset'               => 'utf8',
    'initSQLs'              => array('SET @@session.time_zone = \'+04:00\''),
    'schemaCachingDuration' => 300,
    'emulatePrepare'        => true,
    'enableParamLogging'    => true,
    'enableProfiling'       => true,
);
