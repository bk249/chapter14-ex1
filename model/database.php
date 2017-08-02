<?php
class Database {
    private static $dsn = 'mysql:host=sql2.njit.edu;dbname=bk249';
    private static $username = 'bk249';
    private static $password = 'rlaqldlqslek91';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>