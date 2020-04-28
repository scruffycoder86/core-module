<?php

namespace DigitalClosuxe\Module\Contributor;

use Psr\Container\ContainerInterface;
use DigitalClosuxe\Core\Module\DefaultModule;

/**
 * Class ContributorModule
 *
 * @package DigitalClosuxe\Module\Contributor
 */
class ContributorModule extends DefaultModule
{
    public function __construct(ContainerInterface $app)
    {
        parent::__construct($app);
    }

    /**
     * @param $path
     */
    public function loadRoutes($path)
    {
        $router = $this->getRouter();

        include_once $path;
    }
}