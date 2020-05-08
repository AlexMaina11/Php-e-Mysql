<?php

include_once("conexao.php"); //CONEXÃO COM O BANCO DE DADOS 

    $nome = $_POST['nome'];
    $email =  $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "insert into professor (nome,email,telefone) values ('$nome','$email','$telefone')";
    $salvar = mysqli_query($conexao,$sql); //mysqli_query SALVA OS REGISTROS NO BANCO DE DADOS 

    $linhas = mysqli_affected_rows($conexao); // MOSTRA QUANTAS LINHAS FORAM ALTERADAS NO BANCO DE DADOS 

mysqli_close($conexao);// FECHAMENTO DA CONEXÃO COM O BANCO DE DADOS

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="css/escola">
</head>
<body>
    
    <div class="container">
        <nav>
            <ul class="menu">
            <a href="index.php"><li>Cadastro/Aluno</li></a>
                <a href="cadastroPro.php"><li>Cadastro/Professor</li></a>
                <a href="consultas.php"><li>Consulta/Aluno</li></a>
                <a href="consultasPro.php"><li>Consulta/Professor</li></a>
            </ul>
        </nav>        
        <section>
            <h1>Confirmação de Cadastro</h1>
            <hr><br><br>

            <?php

                if($linhas == 1){
                    print "Cadastro efetuado com sucesso!";
                }
                else{
                    print "[ERRO] Email ou telefone já existente!!";
                }

            ?>
        </section>
   </div>
</body>
</html>