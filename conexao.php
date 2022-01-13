<?php

$hostname = "localhost";
$user = "root";
$password ="";
$database ="cadastro";
$conexao = mysqli_connect($hostname,$user,$password,$database);
$mysqli = new mysqli($hostname,$user,$password,$database);
if(!$conexao) {
    print "falha na conexão com Banco de dados";
}

?>
