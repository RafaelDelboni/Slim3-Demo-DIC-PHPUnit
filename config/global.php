<?php
return array(
    'settings' => array(
        'displayErrorDetails' => true, // set to false in production

        // Renderer settings
        'renderer' => array(
            'template_path' => __DIR__ . '/../templates/',
        ),

        // Monolog settings
        'logger' => array(
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ),
    ),
);