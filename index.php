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
            <h1>Cadastro de Alunos</h1>
            <hr><br><br>

            <form method="post" action="processa.php">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br>

                Nome <br>
                <input type="text" name="nome" class="campo" maxlength="50" required autofocus> <br>
                Email <br> 
                <input type="email" name="email" class="campo" maxlength="50" required> <br>
                Telefone <br>
                <input type="tel" name="telefone" class="campo" maxlength="12" pattern="[0-9]{2} [0-9]{9}" placeholder="99 999999999" required>  <br>
            </form>
        </section>
   </div>
</body>
</html>