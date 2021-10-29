<?php

namespace App\Middleware;

use Slim\App;
use LogicException;
use Psr\Http\Message\ServerRequestInterface;
use React\Http\Response;

final class RouteHandler
{
    private $dispatcher;

    public function __construct()
    {
        
    }

    public function __invoke(ServerRequestInterface $request, App $app)
    {
        $app->addRoutingMiddleware();
        throw new LogicException('Something wrong with routing');
    }
}
