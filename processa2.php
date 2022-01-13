<?php

include_once("conexao2.php");

$nome =$_POST['nome'];
$cpf =$_POST['cpf'];
$nascimento =$_POST['ano']. "-" . $_POST ['mes'] . "-" . $_POST['dia'];
$pai=$_POST['pai'];
$mae=$_POST['mae'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$municipio=$_POST['municipio'];
$cep=$_POST['cep'];
$series=$_POST['series'];
$escolas=$_POST['escolas'];
$turno=$_POST['turno'];
$matricula=$_POST['matricula'];

$sql = "INSERT INTO matricula (nome,cpf,nascimento,pai,mae,telefone,email,rua,numero,bairro,estado,cidade,municipio,cep,series,escolas,turno,matricula) values ('$nome','$cpf','$nascimento','$pai', '$mae', '$telefone', '$email' , '$rua', '$numero', '$bairro', '$estado', '$cidade', '$municipio', '$cep', '$series', '$escolas', '$turno', '$matricula') ";
$salvar = mysqli_query($conexao2, $sql);

mysqli_close($conexao2)

?>