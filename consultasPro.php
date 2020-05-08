<?php

    include_once("conexao.php");

    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

    $slq = "SELECT * FROM professor WHERE nome LIKE '%$filtro%'";
    $consulta = mysqli_query($conexao,$slq);
    $registros = mysqli_num_rows($consulta);  // MOSTRA QUANTAS LINHAS TEM NO BANCO DE DADOS



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
            <h1>Consulta</h1>
            <hr><br><br>

            <form method="get" action="">
                Filtar por nome: <input type="text" name="filtro" class="campo">
                <input type="submit" value="Pesquisar" class="btn">
            </form> 

            <?php
                print "Nomes com a palavra <strong>$filtro</strong><br><br>";

                print "$registros registros encontrados";

                print "<br><br>";

                while($exibirRegistros = mysqli_fetch_array($consulta)){

                    $nome = $exibirRegistros[0];
                    $email = $exibirRegistros[1];
                    $telefone = $exibirRegistros[2];
                    $id = $exibirRegistros[3];

                    print "<article>";

                    print "$nome<br>";
                    print "$email<br>";
                    print "$telefone<br>";
                    print "$id<br>";

                    print "</article>";
                }
                mysqli_close($conexao);


            ?>
        </section>
   </div>
</body>
</html>