<?php
   include('conexao.php');
   $id_agenda = $_GET['id_agenda'];
   $sql = 'SELECT * FROM agenda where id_agenda='.$id_agenda;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de agenda</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastro de Agenda  - IFSP</h1>
    <div id="teste">
        <form method="post" action="altera_agenda_exe.php">
            <fieldset>
                <legend>Cadastro</legend>
                <div class="form-item">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $row['nome']?>" placeholder="Insira o nome">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="apelido">Apelido:</label>
                    <input type="text" id="apelido" name="apelido" value="<?php echo $row['apelido']?>" placeholder="Insira o apelido">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" value="<?php echo $row['endereco']?>" placeholder="Insira o endereco">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="bairro">Bairro:</label>
                    <input type="bairro" id="bairro" name="bairro" value="<?php echo $row['bairro']?>" placeholder="Insira o bairro">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" value="<?php echo $row['cidade']?>" placeholder="Insira a cidade">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado" value="<?php echo $row['estado']?>" placeholder="Insira o estado">
                </div>
                <div class="form-item">

                <div class="form-item">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" value="<?php echo $row['telefone']?>" placeholder="Insira o Telefone">
                </div>

                <div class="form-item">
                    <label for="celular">Celular:</label>
                    <input type="text" id="celular" name="celular" value="<?php echo $row['celular']?>" placeholder="Insira o número de celular">
                </div>
                <div class="form-item">


                    <div class="for-item">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']?>" placeholder="Insira o email">
                </div>

                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
                

            </fieldset>
        </form>
    </div>
</body>
</html>