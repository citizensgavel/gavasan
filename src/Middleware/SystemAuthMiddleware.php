<?php

namespace App\Middleware;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use App\Factory\QueryFactory;
use App\Repository\TableName;


final class SystemAuthMiddleware implements MiddlewareInterface
{
    private $_queryFactory;

    /**
     * Contrutor.
     *
     * @param QueryFactory $_queryFactory _queryFactory
     *
    **/
    public function __construct(QueryFactory $_queryFactory)
    {
        $this->_queryFactory = $_queryFactory;
    }


    /**
     * Invoke middleware.
     *
     * @param ServerRequestInterface $request The request
     * @param RequestHandlerInterface $handler The handler
     *
     * @return ResponseInterface The response
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
       
        $auth = $request->getHeader('Authorization');
        $_authe = $auth[0];
        $_system_key = explode(":", $_authe)[0];

        if(!$auth || !$_system_key){ 
            echo 'You must autheticate to access this resource.';
            header("HTTP/1.1 400 Access denied");
            exit;
        }

        $query = $this->_queryFactory->newSelect(TableName::SYSTEM_CONFIGURATIONS);
        $query->select([TableName::SYSTEM_CONFIGURATIONS.'.*']);
        $row = $query->execute()->fetch('assoc');

        if($row['applicationToken'] !== $_system_key){
            echo 'Failed to autheticate your System. Wrong Token Passed in';
            header("HTTP/1.1 400 Access denied");
            exit;
        }

       return $handler->handle($request);

    }
}

?>
