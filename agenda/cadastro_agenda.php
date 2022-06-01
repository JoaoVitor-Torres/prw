<?php
 include ( 'conexao.php' );

 // Carregar a foto     
 $fotoNome = $_FILES [ 'foto' ][ 'name' ];
 $target_dir = "upload/" ;
 $target_file = $target_dir . basename ( $_FILES [ "foto" ][ "name" ]);
 //Seleciona o tipo de arquivo
 $imageFileType = strtolower ( pathinfo ( $target_file , PATHINFO_EXTENSION ));
 // Extensões de arquivo válidas
 $extensions_arr = array ( "jpg" , "jpeg" , "png" , "gif" );

 // Verifica a extensão
 if ( in_array ( $imageFileType , $extensions_arr )){        
     // Subir arquivo
     if ( move_uploaded_file ( $_FILES [ 'foto' ][ 'tmp_name' ], $target_dir . $fotoNome )){
         $fotoBlob = addslashes ( file_get_contents ( $target_dir . $fotoNome ));
     }
 }
echo "Cadastrando";
$nome = $_POST["nome"];
$apelido = $_POST["apelido"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$email   = $_POST["email"];

echo "<p>Nome: ".$nome."<br>";
echo "<p>Apelido: ".$apelido."<br>";
echo "<p>Endereco: ".$endereco."<br>";
echo "<p>Bairro: ".$bairro."<br>";
echo "<p>Cidade: ".$cidade."<br>";
echo "<p>Estado: ".$estado."<br>";
echo "Telefone: ".$telefone."<br>";
echo "Celular: ".$celular."<br>";
echo "E-mail: ".$email."<br>";


$sql = "INSERT INTO agenda (nome , apelido , endereco , bairro , cidade , estado , telefone , celular , email, foto_blob, foto_nome )
        VALUES (' ".$nome."', ' ".$apelido." ', ' ".$endereco." ' , ' ".$bairro." ' ,  ' ".$cidade." ' , ' ".$estado." ' , ' ".$telefone." ' , ' " .$celular. " ' , ' ".$email." ', '".$fotoBlob. "' , ' ".$fotoNome." ') ";

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos com sucesso";
    else
    echo "Erro ao inserir no banco de dados: " .mysqli_error($con);

?>