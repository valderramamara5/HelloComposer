<?php

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$paths = array("/path/to/entity-files");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'foo',
);

$config = ORMSetup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

return ComposerAutoloaderInitd2cfe36c657bf9a70803d06cd94e0f02::getLoader();
