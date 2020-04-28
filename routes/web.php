<?php

use Illuminate\Routing\Router;

$router->group([ "namespace" => "DigitalClosuxe\Module\Contributor\Action" ], function() use($router){

    /** @var Router $router */
    $router->group(['prefix' => 'api/v1'], function() use($router){

        $router->get('/contributors/add/contributor', 'AddContributor@invokeAction');

        $router->get('/contributors/remove/contributor', 'RemoveContributor@invokeAction');

        $router->get('/contributors/archive/contributor', 'ArchiveContributor@invokeAction');

    });

});
