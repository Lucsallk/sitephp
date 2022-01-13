<?php
					include("conexao.php");

					if(isset($_POST['email']) && strlen($_POST['email']) > 0){


						if(!isset($_SESSION))
							session_start();


					$_SESSION['email'] = $mysqli -> escape_string($_POST['email']);
					$_SESSION['senha'] = md5(md5($_POST['senha']));

					$sql_code = "select  senha, codigo FROM  cadastro WRERE email = '$_SESSION[email]'";
					$sql_query = $mysqli ->query($sql_code) or die($mysqli_error);
					$dado= $sql_query-> fetch_assoc();
					$total=$sql_query->num_rows;

					if($total == 0){
						$error[] = "Este email não pertence a esse usuário";
					}else{

						if($dado['senha'] == $_SESSION['senha']){
							$_SESSION['cadastro'] = $dado['codigo'];

						}else{

							$error[] = "Senha incorreta.";
						}


					}

					if(count($error) == 0  || !isset($error)) {

						echo "<script>alert ('login efetuado com sucesso') ; location.href = '#'</script>";
						}

					}

				?><!DOCTYPE html>
				<html lang="pt-br">
				<head>
					<title>TELA DE ACESSO</title>
					<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" type="text/css" href="css/main.css">
					
					
				</head>
				<body>

					<?php if( isset($error) && count($error) > 0){
					foreach($error as $msg){
						echo " <p> $msg </p>";
					}}
					?>
					
					<div class="container">
						<div class="container-login">
							<div class="wrap-login">
								<form class="login-form">
									<span class="login-form-title">
										Faça o login
									</span>

									<div class="wrap-input margin-top-35 margin-bottom-35"><br><br>
									<input values= "<?php echo $_SESSION['email']; ?> class= "input-form" type="text" name="email" autocomplete="off">
									<span class="focus-input-form" data-placeholder="E-mail"></span>
									</div>

									<div class="wrap-input margin-bottom-35">
										<input class="input-form" type="password" name="password">
										<span class="focus-input-form" data-placeholder="Senha"></span>
									</div>

									<div  class="container-login-form-btn">
										<button class="login-form-btn" type="submit">
											Login
											
										</button>
									</div>

									<ul class="login-utils">
										<li class="margin-bottom-8 margin-top-8">
											<span class="forma1">
												Esqueceu sua
											</span>

											<a href="esqueceuasenha.php" class="forma2">
												senha?
											</a>
										</li>

										<li>
											<span class="forma1">
												Não tem conta?
											</span>

											<a href="cadastro.php" class="forma2">
												Criar
											</a>
										</li>
									</ul>
								</form>
							</div>
							<img src="img/Enter OTP-pana.png" width="300" height="300" class="margin-left-50" />
							<a href="https://storyset.com/user"></a>
						</div>
					</div>
					
					<script>
						let inputs = document.getElementsByClassName('input-form');
						for (let input of inputs) {
							input.addEventListener("blur", function() {
								if(input.value.trim() != ""){
									input.classList.add("has-val");
								} else {
									input.classList.remove("has-val");
								}
							});
						}
					</script>
					
				</body>
				</html>