<?php
include ( "conexao.php" );
$nome = $_POST["txtNome"];
$apelido = $_POST["txtApelido"];
$endereco = $_POST["txtEndereco"];
$bairro = $_POST["txtBairro"];
$cidade = $_POST["txtCidade"];
$estado = $_POST["txtEstado"];
$telefone = $_POST["txtTelefone"];
$celular = $_POST["txtCelular"];
$email   = $_POST["txtEmail"];

echo "<p>Nome: " .$nome."<br>";
echo "<p>Apelido: " .$apelido."<br>";
echo "<p>Endereco: " .$endereco."<br>";
echo "<p>Bairro: " .$bairro."<br>";
echo "<p>Cidade: " .$cidade."<br>";
echo "<p>Estado: " .$estado."<br>";
echo "Telefone: " .$telefone. "<br>";
echo "Celular: " .$celular. "<br>";
echo "E-mail: " .$email. "<br>";


$sql = "INSERT INTO agenda (nome , apelido , endereco , bairro , cidade , estado , telefone , celular , email )
        VALUES (' ".$nome."', ' ".$apelido." ', ' ".$endereco." ' , ' ".$bairro." ' ,  ' ".$cidade." ' , ' ".$estado." ' , ' ".$telefone." ' , ' " .$celular. " ' , ' ".$email." ') ";

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos com sucesso";
    else
    echo "Erro ao inserir no banco de dados: " .mysqli_error($con);

?>