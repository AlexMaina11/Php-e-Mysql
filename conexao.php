<!--
    A CONEXÃO COM O BANCO PODE SE FEITA DE DUAS FORMAS
-->

<!--   PRIMEIRA FORMA                                                          -->
<?php 
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "escola";
    $conexao = mysqli_connect($hostname,$user,$password,$database);


    if(!$conexao){
        echo 'Erro na conexão' . mysqli_connect_error();
    }
?>


<!--    SEGINDA FORMA                                                 -->
<?php
/*
    $conexao = mysqli_connect('localhost', 'root', '', 'escola');

    if(mysqli_connect_error()){
        echo 'Erro na conexão' . mysqli_connect_error();
    }
*/
?>