<?php
 include ( 'conexao.php' );

if ($tipo == 'entrada') {
    $sql="select sum (valor) valor from fluxo_caixa where tipo = 'entrada' ";
} else if ($tipo == 'saida') {
    $sql="select sum (valor) valor from fluxo_caixa where tipo = 'saida' ";
} else if ($tipo == 'total') {
    $sql= "select sum(case when tipo = 'entrada' then valor else 0 end) -
                  sum(case when tipo = 'saida' then valor else 0 end as valor from fluxo caixa";
}

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos com sucesso";
    else
    echo "Erro ao inserir no banco de dados: " .mysqli_error($con);

?> 