<?php

    class Bakery{
        
        function __construct($cake, $bread){

                $cost = $cake*5.99 + $bread * 4.99;

                echo "$cost PLN";
        }

    }

?>