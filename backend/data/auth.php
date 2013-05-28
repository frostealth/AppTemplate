<?php

return array(

    // Roles
    'guest' => array(
        'type'          => CAuthItem::TYPE_ROLE,
        'description'   => 'Guest',
        'bizRule'       => null,
        'data'          => null,
    ),

    // Operations
    'backend' => array(
        'type'          => CAuthItem::TYPE_OPERATION,
        'description'   => 'Access to backend',
        'bizRule'       => null,
        'data'          => null,
    ),
);
