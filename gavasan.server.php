<?php
require_once __DIR__ . '/./vendor/autoload.php';
require_once __DIR__ . '/./config/object.loader.php';

$socket = new Ratchet\App('localhost', 8080);
(require __DIR__ . '/./config/websocket.php')($socket);
echo 'running Gavasan server on port 8080';
$socket->run();
