<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro da Senha</title>
        <!-- Fonte -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <!-- Estilos -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>
            <body>
              <header>
                <div class="container" id="nav-container">
                  <!-- add essa class -->
                  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                    <a class="navbar-brand" href="index.php">
                      <img id="logo" src="img/logo3 2.png" alt="Semed"> 
                    </a></header>
              <div class="container">
                <form action="processa.php" method="post">
                  <br><br><br>
                                   
                <h1>Cadastro da senha</h1>
                <hr>
                    <h3>Dados :</h3>

                  <label>Nome do Aluno:
                  <input type="text" required name="nome" size="40" maxlength="40" id="fname" placeholder="Nome do Aluno"><br>
                        </label>
                        <label>CPF :
                        <input type="text" required name="cpf" size="20" maxlength="40" id="fname" placeholder="cpf">
                        </label>		
                    <label>E-mail :
                    <input type="text" required name="email" size="40" maxlength="40" id="email" placeholder="E-mail"><br>
                        </label>
                        <label> Senha:
                        <input type="senha" required name="senha" size="25" maxlength="8" id="senha" placeholder="Senha">
                    </label><br>
                    <p><input type="submit" class="btn-outline-secondary" value="Enviar"></p>
                            <br> <br>
                    
                            <footer><a href="login.php"></a></footer>
            </body>
            </html>