<?php

return CMap::mergeArray(
    require(__DIR__ . '/../../common/config/main.php'),
    array(
        'basePath' => __DIR__ . '/../',
    )
);