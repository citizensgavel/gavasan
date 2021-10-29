<?php

use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->get('/', \App\Action\Home\Home::class)->setName('root');

    $app->group('/v1/authe', function (RouteCollectorProxy $group) {
        $group->post('/login', \App\Action\Authetication\Login::class);
    }); 
};
