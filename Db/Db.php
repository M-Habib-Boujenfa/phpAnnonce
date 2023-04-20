<?php

namespace App\Db;

use PDO;
use PDOException;

class Db extends PDO
{
    private static $instance;

    private const DBHOST = "localhost";
    private const DBUSER = "root";
    private const DBPASS = "";
    private const DBNAME = "phpannonce";

    private function __construct()
    {
        $dsn = 'mysql:dbname=' . self::DBNAME . ';host=' . self::DBHOST;

        parent::__construct($dsn, self::DBUSER, self::DBPASS);
    }
}
