<?php
    include('conexao.php');

    $id_fluxocaixa = $_GET['id_fluxocaixa'];

    $sql = 'DELETE FROM fluxocaixa WHERE id_fluxocaixa='.$id_fluxocaixa;

    echo "<h1> Exclusão do Fluxo de Caixa </h1>";
	$result = mysqli_query($con, $sql);
    
	if($result)
		echo "Registro excluído com sucesso<br>";
	else
		echo "Erro ao tentar excluir agenda: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a>