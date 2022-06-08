<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM fluxocaixa';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem do Fluxo de Caixa</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>

    <h1 align="center">Listagem do Fluxo de Caixa </h1><br>
    <table align="center" border="1" width="700">
        <!-- tr>th*4 -->
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id_fluxocaixa']. "</td>";
                echo "<td><a href='altera_fluxocaixa.php?id_fluxocaixa=".$row['id_fluxocaixa']."'>" .$row['data']. "</a></td>";
                echo "<td>" .$row['tipo']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                echo "<td>" .$row['historico']. "</td>";
                echo "<td>" .$row['cheque']. "</td>";
                echo "<td><a href='excluir_fluxocaixa.php?id_fluxocaixa=".$row['id_fluxocaixa']."'>Excluir</a></td>";                
                echo "</tr>";
            }
        ?>

    </table>

</body>
</html>