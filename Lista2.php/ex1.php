<?php
 $soma=0;
 for($n1 = 0; $n1 <=100; $n1++){
     if($n1 % 2==0){
         $soma= $soma + $n1;
     }
 }
 echo "A soma dos números pares é: " .$soma;
 ?>