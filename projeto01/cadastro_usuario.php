<?php
include ( "conexao.php" );
$nome = $_POST["txtNome"];
$email= $_POST["txtEmail"];
$telefone= $_POST["txtTelefone"];
echo "<p>Nome do usuario: " .$nome."<br>";
echo "E-mail: " .$email. "<br>";
echo "Telefone: " .$telefone. "</p>";

$sql = "INSERT INTO usuario (nome_usuario , email_usuario , telefone_usuario)
        VALUES (' ".$nome."', ' ".$email." ', ' " .$telefone. " ' ) ";

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos com sucesso";
    else
    echo "Erro ao inserir no banco de dados: " .mysqli_error($con);

?>