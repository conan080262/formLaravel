<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use Config;
use PDO;
class DatabaseConnection
{
    public static function setAnotherDB($dbName)
    {
        // config(['database.connections.anotherDB' => [
        //     'driver' => 'mysql',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST', '127.0.0.1'),
        //     'port' => env('DB_PORT', '3306'),
        //     'database' => $dbName,
        //     'username' => env('DB_USERNAME', 'forge'),
        //     'password' => env('DB_PASSWORD', ''),
        //     'unix_socket' => env('DB_SOCKET', ''),
        //     'charset' => 'utf8',
        //     'collation' => 'utf8_general_ci',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        //     'strict' => true,
        //     'engine' => null,
        //     'options' => extension_loaded('pdo_mysql') ? array_filter([
        //         PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        //     ]) : []
        // ]
        // ]);
        Config::set('database.connections.anotherDB.database', $dbName);
        return DB::connection('anotherDB');
    }
}