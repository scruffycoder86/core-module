<?php

namespace DigitalClosuxe\Core\Module;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Container\Container;
use Psr\Container\ContainerInterface;

use DigitalClosuxe\Core\Module\Component\EventAwareComponent;
use DigitalClosuxe\Core\Module\Component\RouterAwareComponent;

/**
 * Class AbstractService
 *
 * @package DigitalClosuxe\Core\Service
 */
abstract class AbstractModule implements EventAwareComponent, RouterAwareComponent
{
    /**
     * @var Container|ContainerInterface
     */
    protected $app;

    /**
     * DigitalClosuxe constructor.
     *
     * @param ContainerInterface $app
     */
    public function __construct(ContainerInterface $app)
    {
        if (!$app instanceof Container) {
            throw new \InvalidArgumentException();
        }

        $this->app = $app;

        $this->configureEventing();
        $this->configureRouting();
    }

    /**
     * Web API Framework Design Approach (Traditional)
     */
    public function run()
    {
        return $this->handle(Request::createFromGlobals())->send();
    }

    /**
     * API Extension and Standard Implementation
     *
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request): JsonResponse
    {
        return $this->app['router']->dispatch($request);
    }

    /**
     * Event System for default API Infrastructure
     */
    abstract protected function configureEventing();

    /**
     * Routing System for default API Infrastructure
     */
    abstract protected function configureRouting();
}