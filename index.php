<?php
    require_once("Routes.php");
    
    function __autoload($class_name){
        require("classes/{$class_name}.php");
    }
?>