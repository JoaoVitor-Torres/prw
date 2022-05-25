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

    $nome = $_POST [ 'nome' ];
    $email = $_POST [ 'email' ];
    $telefone = $_POST [ 'telefone' ];
    echo  "<h1> Cadastro de Usuários</h1>" ;
    echo  "<p> Nome: " . $nome . "<br>" ;
    echo  "E-mail: " . $email . "<br>" ;
    echo  "Telefone: " . $telefone . "</p>" ;
	
	$sql = "INSERT INTO usuario (nome_usuario,email_usuario,telefone_usuario,foto_blob,foto_nome)
	        VALUES('" . $nome . "','" . $email . "','" . $telefone . "','" . $fotoBlob . "','" . $fotoNome . "')" ;
	//eco $sql;
	$resultado = mysqli_query ( $con , $sql );
	if ( $resultado )
		echo  "Dados inseridos com sucesso" ;
    else
		echo  "Erro ao inserir no banco de dados: " . mysqli_error ( $con );

?>
<a href="index.php">Voltar ao inicio</a> 