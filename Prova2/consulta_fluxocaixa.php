<?php
 include ( 'conexao.php' );

 $tipo = $_POST['tipo'];

echo "Tipo de Consulta  = ".$tipo."<br>";
if ($tipo == 'entrada') {
    $sql="select sum(valor) valor from fluxocaixa where tipo = 'entrada' ";
} else if ($tipo == 'saida') {
    $sql="select sum(valor) valor from fluxocaixa where tipo = 'saida' ";
} else if ($tipo == 'total') {
    $sql= "select sum(case when tipo = 'entrada' then valor else 0 end) -
                  sum(case when tipo = 'saida' then valor else 0 end) as valor
                  from fluxocaixa";
}

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
echo $row['valor']. "<br>";
?> 
<p><a href="index.php">Voltar</a>