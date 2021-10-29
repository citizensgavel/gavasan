<?php
namespace App\MethodInterface;
use App\Domain\Feeds\Service\PopulateUserFeeds;

interface ConnectorInterface {
    /**
     * Triggered when a client sends data through the socket
     * @param  \ConnectorInterface $services The socket/connection that sent the message to your application
     * @param  string                       $msg  The message received
     * @throws \Exception
     */
    function onState(PopulateUserFeeds $services);
}
