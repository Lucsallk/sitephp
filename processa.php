<?php

include_once("conexao.php");

$nome =$_POST['nome'];
$cpf =$_POST['cpf'];
$email =$_POST['email'];
$senha =md5($_POST['senha']);

$sql = "INSERT INTO cadastro (nome,cpf,email,senha) values ('$nome', '$cpf','$email','$senha') ";
$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao)

?>