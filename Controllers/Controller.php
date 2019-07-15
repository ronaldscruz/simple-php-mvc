<?php
    class Controller extends Database{
        public $host = "127.0.0.1";
        public $db = "mvc-shop";
        public $username = "root";
        public $password = "Ronald@18";

        public static function createView($viewName){
            require_once("./Views/{$viewName}.php");
        }
    }
?>