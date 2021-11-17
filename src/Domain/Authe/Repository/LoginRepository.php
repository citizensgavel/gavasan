<?php

namespace App\Domain\Authe\Repository;

use DomainException;
use PDO;
use App\Factory\QueryFactory;
use App\CoreFunctions\InternalCoreFunction;
use Fig\Http\Message\StatusCodeInterface;


final class LoginRepository {

    private $connection;
    private $queryFactory;

    public function __construct(PDO $connection, QueryFactory $queryFactory, InternalCoreFunction $internalCoreFunction){
        $this->connection = $connection;
        $this->queryFactory = $queryFactory;
        $this->internalCoreFunction = $internalCoreFunction;
    }

    public function action($data){
        //var_dump($data)
        return $this->internalCoreFunction->requestResponser([], 'request success', StatusCodeInterface::STATUS_OK);
    }

}
