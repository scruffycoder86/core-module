<?php

namespace DigitalClosuxe\Core\Module;

use Illuminate\Routing\Router;
use Illuminate\Events\Dispatcher;
use Psr\Container\ContainerInterface;

/**
 * Class DefaultModule
 *
 * @package DigitalClosuxe\Core\Module
 */
abstract class DefaultModule extends AbstractModule
{
    /**
     * DefaultModule constructor.
     *
     * @param ContainerInterface $app
     */
    public function __construct(ContainerInterface $app)
    {
        parent::__construct($app);
    }

    /** [@inheritDoc] */
    public function getEventDispatcher()
    {
        return $this->app->get('events');
    }

    /** [@inheritDoc] */
    public function getRouter()
    {
        return $this->app->get('router');
    }

    /**
     * Event System for default API Infrastructure
     */
    protected function configureEventing()
    {
        $this->app->singleton('events', function () {
            return new Dispatcher();
        });
    }

    /**
     * Routing System for default API Infrastructure
     */
    protected function configureRouting()
    {
        $this->app->singleton('router', function () {
            if ($this->app->has('events')) {
                return new Router($this->app->get("events"));
            } else {
                return new Router(new Dispatcher());
            }
        });
    }
}