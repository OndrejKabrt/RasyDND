<?php

class DatabaseConnection
{
    private const HOST = "localhost";
    private const USER = "root";
    private const PASSWORD = "root";
    private const DATABASE = "webovkyblog";

    private static $connection;

    protected function __construct()
    {
    }

    public static function getConnection(): ?PDO
    {
        if (!self::$connection) {
            try {
                self::$connection = new PDO(
                    'mysql:host=' . self::HOST . ';dbname=' . self::DATABASE,
                    self::USER, self::PASSWORD
                );
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), $e->getCode());
            }
        }
        return self::$connection;
    }
}
