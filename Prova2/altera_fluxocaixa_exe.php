<?php
    include('conexao.php');
    
    $id_fluxocaixa = $_POST['id_fluxocaixa'];
    $data = $_POST["data"];
    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    $historico = $_POST["historico"];
    $cheque = $_POST["cheque"];
    
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Data Fluxo de Caixas: " . $data . "<p>";
    
	
	$sql = "UPDATE fluxocaixa SET
            data='".$data."',
            tipo='".$tipo."',
            valor='".$valor."',
            historico='".$historico."',
            cheque='".$cheque."'
          WHERE id_fluxocaixa=".$id_fluxocaixa;
     
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a>