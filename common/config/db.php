<?php

$config = parse_ini_file('../../app-config.ini', true);

if ($_SERVER["SERVER_NAME"] == "localhost" || $_SERVER["SERVER_NAME"] == "127.0.0.1") {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=' . $config['mysql_local_host'] . ';dbname=' . $config['mysql_local_db'] . '',
        'username' => $config['mysql_local_un'],
        'password' => $config['mysql_local_pwd'],
        'charset' => 'utf8',
//        'enableSchemaCache' => true,
//        'enableSchemaCache' => false,
//        // Duration of schema cache.
//        'schemaCacheDuration' => 3600,
//        // Name of the cache component used to store schema information
//        'schemaCache' => 'cache',
    ];
} else {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=' . $config['mysql_online_host'] . ';dbname=' . $config['mysql_online_db'] . '',
        'username' => $config['mysql_online_un'],
        'password' => $config['mysql_online_pwd'],
        'charset' => 'utf8',
//        'enableSchemaCache' => true,
//        // Duration of schema cache.
//        'schemaCacheDuration' => 3600,
//        // Name of the cache component used to store schema information
//        'schemaCache' => 'cache',
    ];
}