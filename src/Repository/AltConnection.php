<?php

namespace App\Repository;

class AltConnection
{
    public function __construct()
    {
        $settings = require __DIR__ . '/../../config/settings.php';
        $settings = $settings['db'];
        $host = $settings['host'];
        $dbname = $settings['database'];
        $username = $settings['username'];
        $password = $settings['password'];
        $charset = $settings['charset'];
        $flags = $settings['flags'];
        $port = $settings['port'];
        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";

        try {
            
            $pdo = new \PDO($dsn, $username, $password, $flags);
            if($pdo){
                echo 'connedted to database...';
                return $pdo;
            }
             
        } catch (\PDOException $ex) {
            die(json_encode(array('outcome' => false, 'message' => 'Unable to connect: ' . $ex)));
        }
    }
}
