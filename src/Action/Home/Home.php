<?php

namespace App\Action\Home;

use App\Responder\Responder;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Action.
 */
final class Home
{
    /**
     * @var Responder
     */
    private $responder;

    /**
     * The constructor.
     *
     * @param Responder $responder The responder
     */
    public function __construct(Responder $responder)
    {
        $this->responder = $responder;
    }

    /**
     * Action.
     *
     * @param ServerRequestInterface $request The request
     * @param ResponseInterface $response The response
     *
     * @return ResponseInterface The response
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $viewData = [
            'welcome' => 'Gavasan is live...',
            'now' => date('d.m.Y H:i:s'),
            'your_ip_address' =>  $request->getAttribute('ip_address')
        ];
        $response->getBody()->write((string)json_encode($viewData));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }
}
