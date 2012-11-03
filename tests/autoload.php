<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$loader = new Zend\Loader\StandardAutoloader();

// Register the "Nel" namespace:
$loader->registerNamespace('Nel', dirname(__DIR__) . DIRECTORY_SEPARATOR. 'library' . DIRECTORY_SEPARATOR . 'Nel');

// Register with spl_autoload:
$loader->register();