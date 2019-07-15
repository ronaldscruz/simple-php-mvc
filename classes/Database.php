<?php
    class Database{
        public static $host = "127.0.0.1";
        public static $dbName = "mvc-shop";
        public static $username = "root";
        public static $password = "Ronald@18";

        private static function connect(){
            $pdo = new PDO("mysql:host=".self::$host."; dbname=".self::$dbName."; charset=utf8", self::$username, self::$password);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }

        public static function query($query, $params = array()){
            $statement = self::connect() -> prepare($query);
            $statement -> execute($params);
            if(explode(' ', $query)[0] == "SELECT"){
                $data = $statement -> fetchAll();
                return $data;
            }
        }
    }
?>