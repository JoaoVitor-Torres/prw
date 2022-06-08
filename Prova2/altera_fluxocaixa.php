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
    <h1>Cadastro do Fluxo de Caixa - IFSP</h1>
    <div id="teste">
    <?php echo "<td><img src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' width='150' height='150'/></td>"; ?>
    <form method="post" action="altera_fluxocaixa_exe.php" enctype='multipart/form-data'>
            <fieldset>
                <legend>Cadastro</legend>
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="text" id="data" name="data" value="<?php echo $row['data']?>" placeholder="Insira a data">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="tipo">Tipo:</label>
                    <input type="text" id="tipo" name="tipo" value="<?php echo $row['tipo']?>" placeholder="Insira o tipo">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" value="<?php echo $row['valor']?>" placeholder="Insira o valor">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="historico">Historico:</label>
                    <input type="historico" id="historico" name="historico" value="<?php echo $row['historico']?>" placeholder="Insira o historico">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="cheque">Cheque:</label>
                    <input type="text" id="cheque" name="cheque" value="<?php echo $row['cheque']?>" placeholder="Insira o cheque">
                </div>
                <div class="form-item"> 

                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id_fluxocaixa" type="hidden" value="<?php echo $row['id_fluxocaixa']?>">
                

            </fieldset>
        </form>
    </div>
</body>
</html>