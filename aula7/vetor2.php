<?php
$alunos = array ( 'José' , 'João' , 'Pedro' , 'Maria' , 'Alan' );
     // print_r imprime todos os elementos do vetor
     print_r ( $alunos );
     echo( '<br>' );
 
     /// Remove o elemento 2 do vetor
     unset( $alunos [ 2 ]);
     print_r ( $alunos );
     echo( '<br>' );
     
     //reordena os índices do vetor
     $alunos = array_values( $alunos );
     print_r ( $alunos );
 ?>
