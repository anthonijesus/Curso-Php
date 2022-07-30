<?php

   $i = 0; 
   while ($i < 5){
    echo "<h1> $i </h1>";
    $i ++;
   } 

   echo "<hr/>";

   $j = 0;
   $sigo = true;

   while ($sigo){
    echo "<h1> $j </h1>";
    $j ++;
    if($j >= 5){
       $sigo = false;
    }
   }
    
   echo "<hr/>";
   for($k = 0; $k < 5; $k++){
    echo "<h1> $k </h1>";
   }
