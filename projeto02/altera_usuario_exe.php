<?php
    include('conexao.php');
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
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Usuário: " . $nome . "<p>";
    if(isset($fotoNome)){
      $sql = "UPDATE usuario SET
                nome_usuario='".$nome."',
                email_usuario='".$email."',
                telefone_usuario='".$telefone."',
                foto_blob='".$fotoBlob."',
                foto_nome='".$fotoNome."'
              WHERE id_usuario=".$id_usuario;
    }
    else
    {
      $sql = "UPDATE usuario SET
                nome_usuario='".$nome."',
                email_usuario='".$email."',
                telefone_usuario='".$telefone."'
              WHERE id_usuario=".$id_usuario;
    }
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a>