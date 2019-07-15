<?php
    class Products extends Controller{
        public static function showProducts(){
            print_r(self::query("SELECT * FROM product"));
        }
    }
?>