<?php

use App\Middleware\SessionMiddleware;
use App\Middleware\UrlGeneratorMiddleware;
use Selective\BasePath\BasePathMiddleware;
use Selective\Validation\Middleware\ValidationExceptionMiddleware;
use Slim\App;
use Slim\Middleware\ErrorMiddleware;
use Slim\Views\TwigMiddleware;

return function (App $app) {
    $app->addBodyParsingMiddleware();
    $app->addRoutingMiddleware();
    $app->add(ValidationExceptionMiddleware::class);
    $app->add(SessionMiddleware::class);
    $app->add(UrlGeneratorMiddleware::class);
    $app->add(TwigMiddleware::class);
    $checkProxyHeaders = true;
    $trustedProxies    = ['10.0.0.1', '10.0.0.2']; 
    $app->add(new RKA\Middleware\IpAddress($checkProxyHeaders, $trustedProxies));
    $app->add(BasePathMiddleware::class);
    $app->add(ErrorMiddleware::class);
};
