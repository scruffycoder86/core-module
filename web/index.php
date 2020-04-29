<?php

use Illuminate\Container\Container;
use Psr\Container\ContainerInterface;
use Illuminate\Support\Facades\Facade;

use DigitalClosuxe\Module\Contributor\ContributorModule;

require_once __DIR__ . '/../vendor/autoload.php';

/** @var Container $app */

/**
 * Create your own application instance here
 * that implements PSR-11
 */
$app = Container::getInstance();
Facade::setFacadeApplication($app);

/** @var ContainerInterface $app */

/**
 * Create application runner
 */
$apiRunner = new ContributorModule($app);

/**
 * Route loading mechanism
 */
$apiRunner->loadRoutes(__DIR__ . '/../routes/web.php');

/**
 * Internally handle the instantiation of the
 * external request instantiation
 */
$apiRunner->run();