<?php

return array(
    'mail' => array(
        'admin'     => array('admin@example.com' => 'Administration'),
        'team'      => array('admin@example.com' => 'Team'),
        'feedback'  => array('feedback@example.com' => 'Feedback'),
    ),
    'hosts' => array(
        'frontend'  => YII_DEBUG ? '//app.local' : '//www.app.com',
        'backend'   => YII_DEBUG ? '//admin.app.local' : '//admin.app.com',
    ),
);
