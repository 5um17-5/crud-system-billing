<?php

$dbhost = 'localhost:8889';
         $dbuser = 'root';
         $dbpass = 'root';
         $dbname = '1';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         //echo 'Connected successfully';
        
?>