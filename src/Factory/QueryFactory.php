<?php

namespace App\Factory;

use Cake\Database\Connection;
use Cake\Database\Query;
use RuntimeException;
use UnexpectedValueException;



final class QueryFactory{

    private $connection;
    private $beforeUpdateCallback;
    private $beforeInsertCallback;


    public function __construct(Connection $connection){
        $this->connection = $connection;
    }

    public function newQuery(): Query{
        return $this->connection->newQuery();
    }


    public function newSelect(string $table): Query{
        $query = $this->newQuery()->from($table);
        if (!$query instanceof Query) {
            throw new UnexpectedValueException('Failed to create query');
        }
        return $query;
    }


    public function newUpdate(string $table, array $data): Query {
        if (isset($this->beforeUpdateCallback)) {
            $data = (array)call_user_func($this->beforeUpdateCallback, $data, $table);
        }
        return $this->newQuery()->update($table)->set($data);
    }



    public function newInsert(string $table, array $data): Query{
        if (isset($this->beforeInsertCallback)) {
            $data = (array)call_user_func($this->beforeInsertCallback, $data, $table);
        }
        return $this->newQuery()->insert(array_keys($data))->into($table)->values($data);
    }


    public function newDelete(string $table): Query{
        return $this->newQuery()->delete($table);
    }

    public function beforeUpdate(callable $callback): void{
        $this->beforeUpdateCallback = $callback;
    }

   
    public function beforeInsert(callable $callback): void{
        $this->beforeInsertCallback = $callback;
    }
    
}
