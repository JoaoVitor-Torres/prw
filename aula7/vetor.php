<?php
    $alunos = array('Jose', 'Joao', 'Pedro', 'Maria', 'Alan');
    for($x = 0; $x < count($alunos); $x++){
        echo 'Aluno: ' .$x+1 . ' Nome: ' . $alunos[$x] . '<br>';
    }
    $indice = array_search('Magnolia', $alunos);
    if($indice === false)
    echo 'Aluno não escontrado';
    else
    echo 'Aluno encontrado na posição ' .$indice

?>