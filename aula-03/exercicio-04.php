<?php
    function Multiplicacao($mult){
         for ($i=1; $i < 11 ; $i++) { 
            $resultado = $mult * $i ;
             echo "$mult X $i = $resultado". "<br>";
          }
}
 
 echo Multiplicacao(45435);
?>