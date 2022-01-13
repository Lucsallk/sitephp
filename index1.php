<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matrícula Online 2022 -SEMED</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="index.html">
          <img id="logo" src="img/logo3 2.png" alt="Semed"> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a class="nav-item nav-link" id="home-menu" href="#">Home</a>
            <a class="nav-item nav-link" id="about-menu" href="#prematricula">Informações da Pré-Matrícula</a>
            <a class="nav-item nav-link" id="contatos-menu" href="#contato">Contatos</a>
          </div>
        </div>
      </nav>
    </div> 
  </header>
        <!-- slider -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1907.i211.014..school stationery realistic composition.jpg" class="d-block w-100" alt="Semed">
            <a href="https://br.freepik.com/fotos-vetores-gratis/fundo">Fundo vetor criado por macrovector - br.freepik.com</a><br>
              <div class="carousel-caption d-md-block"><br>
              <h2>Faça aqui sua Pré-Matrícula</h2>  <br>
            <a target="_blank" href="index2.php" class="main-btn">Pré-Matrícula</a>
            </div>
          </div>
         </div>
      <!-- Sobre a Matrícula-->
      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> <br><br><br>
                <h3  id="prematricula"  class="main-title">Sobre a Matrícula</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="img/laptop.jpg " alt="Sobre a Matrícula">
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Veja os procedimentos da Pré-Matrícula</h3>
                  <ul id="about-list">
                  <li><i class="fas fa-check"></i> Pré-Matrícula 2022 de menores de 18 anos de idade e maiores devem ser feitas pelos pais ou responsáveis pelo aluno</li>
                  <li><i class="fas fa-check"></i> O procedimento somente pode ser realizado por quem irá ingressar, ou continuar, em uma das escolas do ensino público</li>
                  <li><i class="fas fa-check"></i>Os alunos que pedirão transferências também devem realizar a Pré-Matrícula 2021 para a escola onde desejam se matricular</li>
                  <li><i class="fas fa-check"></i>O processo é valido  para o município. Por isso, se a instituição deseja está dentro dessa categoria, não há dúvidas sobre o uso do processo rápido e cômodo. Para quem não tem acesso a internet, é possível comparecer na escola onde o aluno está matriculado ou irá ingressar pela primeira vez para realizar o processo. Ainda existem muitas pessoas que preferem o método tradicional para não terem demais problemas. Dessa maneira, basta ir até o colégio com todos os documentos que são requisitados e assim, realizar o procedimento do qual seria feito de forma online, rapidamente no colégio, mas, é importante saber que se está sujeito a demais filas e esperas.</li>
               </ul>
              </div>
            </div>
          </div>
      </div> <br>
      <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 id="contato" class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para:</span> (79) 2106-7457 / (79) 2106-7453</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 14:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> ntic.semed@socorro.se.gov.br</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Venha tomar um café:</span> Rua Padre Manoel Gomes S/N, SN
                Centro - Nossa Senhora do Socorro - SE CEP 49160-000</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Deixe aqui uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="subject">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                <input type="submit" class="main-btn">
              </form>
            </div>
          </div>
      </div>
    </div><br>
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12"><br>
              <p> <a href="#"></a> Desenvolvido por SEMED_TIC</a> &copy; 2022</p>
            </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts do projeto -->
  <script src="js/scripts.js"></script>
</body>
</html>



