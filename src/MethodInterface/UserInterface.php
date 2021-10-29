<?php


namespace App\MethodInterface;

use App\Factory\QueryFactory;
use App\Repository\RepositoryInterface;
use App\Repository\TableName;
use Cake\Chronos\Chronos;
use PDO;
use DomainException;


final class UserInterface implements RepositoryInterface{

    private $connection;
    private $queryFactory;

    public function __construct(PDO $connection, QueryFactory $queryFactory){
        $this->connection = $connection;
        $this->queryFactory = $queryFactory;
    }

    public function getUserId($username) {
        $query = $this->queryFactory->newSelect(TableName::USERS);
        $query->select(['uid']);
        $query->andWhere(['username' => $username]);
        return $query->execute()->fetch('assoc');
    }
}