<?php

/**
 * Register application modules
 */
$application->registerModules(array(
        'frontend' => array(
            'className' => 'Dinhdalat\Frontend\Module',
            'path' => __DIR__ . '/../apps/frontend/Module.php'
        ),
        'backend' => array(
            'className' => 'Dinhdalat\Backend\Module',
            'path' => __DIR__ . '/../apps/backend/Module.php'
        )
    )
);
