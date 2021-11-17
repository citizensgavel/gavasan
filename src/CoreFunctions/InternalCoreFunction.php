<?php
namespace App\CoreFunctions;
use App\Factory\QueryFactory;
use App\Repository\RepositoryInterface;
use PDO;
use PDOException;

final class InternalCoreFunction implements RepositoryInterface {
    
    private $queryFactory;
    private $connection;

    public function __construct(QueryFactory $queryFactory, PDO $connection)
    {
        $this->queryFactory = $queryFactory;
        $this->connection = $connection;
    }

    public function requestResponser($data, $message, $status){
        return ['data' => $data, 'message' => $message, 'status'=> $status];
    }
}