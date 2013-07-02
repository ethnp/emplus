<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
        'type'        => 'pdo',
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=izwe',
			'username'   => 'root',
			'password'   => 'chainfire',
            'persistent' => false,
            'compress'   => false
		),
        'identifier'   => '`',
        'table_prefix' => '',
        'charset'      => 'utf8',
        'enable_cache' => true,
        'profiling' => true
	),
    'pmwf' => array(
        'type'        => 'pdo',
        'connection'  => array(
            'dsn'        => 'mysql:host=localhost;dbname=bpmwf',
            'username'   => 'root',
            'password'   => 'chainfire',
            'persistent' => false,
            'compress'   => false
        ),
        'identifier'   => '`',
        'table_prefix' => '',
        'charset'      => 'utf8',
        'enable_cache' => true,
        'profiling' => true
    )
);
