<?php
   include('conexao.php');
   $id_fluxocaixa = $_GET['id_fluxocaixa'];
   $sql = 'SELECT * FROM fluxocaixa where id_fluxocaixa='.$id_fluxocaixa;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Fluxo de Caixa</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Alteração do Fluxo de Caixa - IFSP</h1>
   
    
    <form method="post" action="altera_fluxocaixa_exe.php" enctype='multipart/form-data'>
            <fieldset>
                <legend>Cadastro</legend>
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="text" id="data" name="data" value="<?php echo $row['data']?>">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label>Tipo: </label>
                    <input type="radio" id="tipo" name="tipo" value="entrada">
                    <label for="entrada">Entrada</label>
                    <input type="radio" id="tipo" name="tipo" value="saida">
                    <label for="saida">Saída</label><br>
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" value="<?php echo $row['valor']?>" >
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="historico">Historico:</label>
                    <input type="historico" id="historico" name="historico" value="<?php echo $row['historico']?>" >
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="cheque">Cheque:</label>
                    <input type="text" id="cheque" name="cheque" value="<?php echo $row['cheque']?>">
                </div>
                <div class="form-item"> 

                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id_fluxocaixa" type="hidden" value="<?php echo $row['id_fluxocaixa']?>">
                

            </fieldset>
        </form>
  
</body>
</html>