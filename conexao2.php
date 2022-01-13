<?php

$hostname = "localhost";
$user = "root";
$password ="";
$database ="matricula";
$conexao2 = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao2) {
    print "falha na conexão com Banco de dados";
}

?>