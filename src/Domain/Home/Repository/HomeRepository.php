<?php

namespace App\Domain\Home\Repository;

use DomainException;
use PDO;
use App\Factory\QueryFactory;


final class HomeRepository {

    private $connection;
    private $queryFactory;

    public function __construct(PDO $connection, QueryFactory $queryFactory){
        $this->connection = $connection;
        $this->queryFactory = $queryFactory;
    }

    public function action($data){
        //var_dump($data)
    }

}
