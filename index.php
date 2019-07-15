<?php
    require_once("Routes.php");
    
    function __autoload($class_name){
        if(file_exists("classes/{$class_name}.php")){
            require("classes/{$class_name}.php");
        }else if ("Controllers/{$class_name}.php"){
            require("Controllers/{$class_name}.php");
        }
        
    }
?>