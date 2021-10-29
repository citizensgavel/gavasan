<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Routing\RouteContext;

/**
 * CORS middleware.
 */
final class CorsMiddleware implements MiddlewareInterface
{
    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ): ResponseInterface {
        $routeContext = RouteContext::fromRequest($request);
        $routingResults = $routeContext->getRoutingResults();
        $methods = $routingResults->getAllowedMethods();
        $requestHeaders = $request->getHeaderLine('Access-Control-Request-Headers');
        $http_origin = $_SERVER['SERVER_NAME'];

        $response = $handler->handle($request);

        $response = $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Methods', implode(', ', $methods))
            ->withHeader('Access-Control-Allow-Headers', $requestHeaders ?: '*');

        // Optional: Allow Ajax CORS requests with Authorization header
        $response = $response->withHeader('Access-Control-Allow-Credentials', 'true');

        return $response;
    }
}
