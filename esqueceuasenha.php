<?php

include("conexao.php");

if(isset($_POST['ok'])){

    $email = $mysqli -> escape_string($_POST['email']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error[] = "Email inválido";
    }

      
        $sql_code = "select  senha, codigo FROM  cadastro WHERE email = '$email'";
        $sql_query =  $mysqli ->query($sql_code) or die($mysqli_error);
        $dado= $sql_query-> fetch_assoc();
        $total=$sql_query->num_rows;

        if($total == 0)
        $error[] = " O email informado não existe no banco de dados";
        if(count($error)== 0 && $total > 0){

        $novasenha = substr(md5(time()), 0, 6);
        $sncriptografada = md5(md5($novasenha));
 

 if(mail($email, "Sua nova senha", "Sua nova Senha: ".$novasenha)){


        $sql_code = "UPDATE cadastro  SET  senha = ' $sncriptografada' WHERE  email = '$email'";
        $sql_query = $mysqli -> query($sql_code) or die($mysqli -> error);

       if($sql_query)
        $error[] = "Senha alterada com sucesso!";
   }
 
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    </head>
    <body>
                    <?php if( isset($error) && count($error) > 0){
					foreach($error as $msg){
						echo "<p> $msg </p>";
					}}
					?>
            <form method="POST" action="">
            <p><input  placeholder="Seu e-mail" name="email" type="text"></p>
            <p><input placeholder="Coloque sua nova senha" nome="senha" type="password"></p>
            <p> <a href="esqueceuasenha.php" type="_blank"></a></p>
            <p></p><input value="Enviar" type="submit"></p>
        </form>
            
    </body>
</html>