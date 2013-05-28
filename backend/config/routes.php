<?php

return CMap::mergeArray(
    array(
        '' => 'dashboard/index',
    ),
    require(__DIR__ . '/../../common/config/routes.php')
);
