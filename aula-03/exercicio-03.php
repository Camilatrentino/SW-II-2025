<?php
 function parouimpar($num){
    if ($num % 2 == 0){
      return "O número $num é par";
    }
    else {
        return "O número $num ímpar";
    } 
 }

 echo parouimpar(5499);

?>