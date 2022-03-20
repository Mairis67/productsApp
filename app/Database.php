<?php

namespace App;

use Doctrine\DBAL\DriverManager;

class Database
{
    private static $connection = null;

    public static function connection()
    {
        if(self::$connection === null) {
            $connectionParams = [
                'dbname' => 'products',
                'user' => 'mairis',
                'password' => 'Codelex123mySql!',
                'host' => 'localhost',
                'driver' => 'pdo_mysql'
            ];
            self::$connection = DriverManager::getConnection($connectionParams);
        }
        return self::$connection;
    }
}