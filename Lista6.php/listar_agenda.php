<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM agenda';

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
    <title>Listagem da Agenda</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>

    <h1 align="center">Listagem da Agenda</h1><br>
    <table align="center" border="1" width="700">
        <!-- tr>th*4 -->
        <tr>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Excluir</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id_agenda']. "</td>";
                echo "<td><a href='altera_agenda.php?id_agenda=".$row['id_agenda']."'>" .$row['nome']. "</a></td>";
                echo "<td>" .$row['apelido']. "</td>";
                echo "<td>" .$row['endereco']. "</td>";
                echo "<td>" .$row['bairro']. "</td>";
                echo "<td>" .$row['cidade']. "</td>";
                echo "<td>" .$row['estado']. "</td>";
                echo "<td>" .$row['telefone']. "</td>";
                echo "<td>" .$row['celular']. "</td>";
                echo "<td>" .$row['email']. "</td>";
                echo "<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";                
                echo "</tr>";
            }
        ?>

    </table>

</body>
</html>