<?php

/**
 * GitHub delight-im/PHP-DB
 * https://github.com/delight-im/PHP-DB
 */

$dataSource = new \Delight\Db\PdoDataSource('mysql');
$dataSource->setHostname('localhost');
$dataSource->setPort(3306);
$dataSource->setDatabaseName('premios');
$dataSource->setCharset('utf8mb4');
$dataSource->setUsername('root');
$dataSource->setPassword('');

$db = \Delight\Db\PdoDatabase::fromDataSource($dataSource);