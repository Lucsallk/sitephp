<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula 2022</title>
    <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/styles.css">
</head>
<body >
    <header>
              <div class="container" id="nav-container">
              <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
              <a class="navbar-brand" href="index.php">
              <img id="logo" src="img/logo3 2.png" alt="Semed"> 
                </a>
     </header>

     <div class="container">
        <form action="processa2.php" method="post" >
       	<BR><BR>
         		
         <h1>Formulário de Matrícula</h1>
         <hr>
        		<h3>Dados Pessoais:</h3>
    
     			<label>Nome:
    			<input type="text" required name="nome" size="40" maxlength="40" id="nome" placeholder="Nome do Aluno"><br>
                 </label>
                 <label>CPF:
                 <input type="text" required name="cpf" size="20" maxlength="40" id="fname" placeholder="CPF">
                 </label>		
         		 <label>Nascimento:
         		 <input type="data" required name="dia" size="1" maxlength="2" id="dia" placeholder="dia">/
         		 <input type="data" required name="mes" size="1" maxlength="2" id="mes" placeholder="mês">/
         		 <input type="data" required name="ano" size="3" maxlength="6" id="ano" placeholder="ano">
         		 </label>
         		 <label> Mãe:
        		 <input type="text" required name="mae" size="40" maxlength="40" id="mae" placeholder="mãe"><br>
                 </label>
     			<label> Pai:
         		<input type="text" required name="pai" size="40" maxlength="40" id="pai" placeholder="pai"><br>
                 </label>
         		<label>Telefone: DDD (
         				<input type="tel" required name="ddd" size="1" maxlength="2" id="ddd"placeholder="DDD">
         				Tel:<input type="tel" required name="telefone" size="12" maxlength="8" id="tel" placeholder="telefone">
         		</label><br>
        			<label>E-mail:
         			<input type="email" required name="email" size="45" maxlength="40" id="email" placeholder="aaa@aaa.com.br" ><br>
                    </label>
         			<br>
                     <hr>
                     <fieldset>
                        <legend>Dados de Endereço</legend>
                        <table cellspacing="10">
                         <tr >
                          <td >
                           <label for="rua">Rua:</label>
                          </td>
                          <td align="left">
                           <input type="text" name="rua" size="35">
                          </td>
                          <td>
                           <label for="numero">Numero:</label>
                          </td>
                          <td align="left">
                           <input type="text" name="numero" size="6">
                          </td>
                         </tr>
                         <tr>
                          <td>
                           <label for="bairro">Bairro: </label>
                          </td>
                          <td align="left">
                           <input type="text" name="bairro" size= "25">
                          </td>
                         </tr>
                         <tr>
                          <td>
                           <label for="estado">Estado:</label>
                          </td>
                          <td align="left">
                           <select name="estado"> 
                           <option value=""></option>
                           <option value="ac">Acre</option> 
                           <option value="al">Alagoas</option> 
                           <option value="am">Amazonas</option> 
                           <option value="ap">Amapá</option> 
                           <option value="ba">Bahia</option> 
                           <option value="ce">Ceará</option> 
                           <option value="df">Distrito Federal</option> 
                           <option value="es">Espírito Santo</option> 
                           <option value="go">Goiás</option> 
                           <option value="ma">Maranhão</option> 
                           <option value="mt">Mato Grosso</option> 
                           <option value="ms">Mato Grosso do Sul</option> 
                           <option value="mg">Minas Gerais</option> 
                           <option value="pa">Pará</option> 
                           <option value="pb">Paraíba</option> 
                           <option value="pr">Paraná</option> 
                           <option value="pe">Pernambuco</option> 
                           <option value="pi">Piauí</option> 
                           <option value="rj">Rio de Janeiro</option> 
                           <option value="rn">Rio Grande do Norte</option> 
                           <option value="ro">Rondônia</option> 
                           <option value="rs">Rio Grande do Sul</option> 
                           <option value="rr">Roraima</option> 
                           <option value="sc">Santa Catarina</option> 
                           <option value="se">Sergipe</option> 
                           <option value="sp">São Paulo</option> 
                           <option value="to">Tocantins</option> 
                          </select>
                          </td>
                         </tr>
                         <tr>
                          <td>
                           <label for="cidade">Cidade: </label>
                          </td>
                          <td align="left">
                           <input type="text" name="cidade">
                          </td>
                         </tr>
                         <tr>
                            <td>
                             <label for="municipio">Município: </label>
                            </td>
                            <td align="left">
                             <input type="text" name="municipio" size="32">
                            </td>
                           </tr>
                         <tr>
                          <td>
                           <label for="cep">CEP: </label>
                          </td>
                          <td align="left">
                           <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
                          </td>
                         </tr>
                        </table>
                       </fieldset>
                       <br />
                       <hr>
                   	      <label><h3>Informações da Matrícula:</h3></label>
         			      <div class="principal">
         				  <div class="series"></div>
         				  <label> Séries: </label><br/>
         					<select name="series">
                                <option value=""></option>
         						  <option value="Berçário">Berçário</option>
         						  <option value="Infantil 1">Infantil 1</option>
         						  <option value="Infantil 2">Infantil 2</option>
         						  <option value="Infantil 3">Infantil 3</option>
         						  <option value="Pré 1">Pré 1</option>
         						  <option value="Pré 2">Pré 2</option>
         						  <option value="1º ano">1º ano</option>
         						  <option value="2º ano">2º ano</option>
         						  <option value="3º ano">3º ano</option>
         						  <option value="4º ano">4º ano</option>
        						  <option value="5º ano">5º ano</option>
         						  <option value="6º ano">6º ano</option>
                                  <option value="7º ano">7º ano</option>
                                  <option value="8º ano">8º ano</option>
                                  <option value="9º ano">9º ano</option>
                                  <option value="EJA 1º">EJA 1º</option>
                                  <option value="EJA 2º">EJA 2º</option>
                                  <option value="EJA 3º">EJA 3º</option>
                                  <option value="EJA 4º">EJA 4º</option>
         					</select><br>
                             <br>
                            <div class="escolas" ></div>
                            <label > Escolas:</label><br/>
                            <select name="escolas"id = 'escolas'>
                                <option value="valor0"></option>
                                <option value="Creche Ana Crista">Creche Ana Crista</option>
                                <option value="Creche Cido Capunga">Creche Cido Capunga</option>
                                <option value="Creche Dom Hélder">Creche Dom Hélder</option>
                                <option value="Creche Irmã Dulce">Creche Irmã Dulce</option>
                                <option value="Creche Madre Maria">Creche Madre Maria</option>
                                <option value="Creche Mariana Martins">Creche Mariana Martins</option>
                                <option value="Creche Michele">Creche Michele</option>
                                <option value="Creche Vovô Jason">Creche Vovô Jason</option>
                                <option value="Jardim de Infancia Pequena Fada">Jardim de Infancia Pequena Fada</option>
                                <option value="E. M. Abelardo Pereira de Melo">E. M. Abelardo Pereira de Melo</option>
                                <option value="E. M. Anália Vieira de Figueiredo">E. M. Anália Vieira de Figueiredo</option>
                                <option value="E. M. Apulcro Mota">E. M. Apulcro Mota</option>
                                <option value="E. M. Barquinho Amarelo">E. M. Barquinho Amarelo</option>
                                <option value="E. M. Coronel Gentil Daltro">E. M. Coronel Gentil Daltro</option>
                                <option value="E. M. Coronel Gentil Daltro">E. M. Diva Maria Correa</option>
                                <option value="E. M. Doutor João Garcez Vieira">E. M. Doutor João Garcez Vieira</option>
                                <option value="E. M. Eduardo Viana dos Santos">E. M. Eduardo Viana dos Santos</option>
                                <option value="E. M. Izídio Marques de Melo">E. M. Izídio Marques de Melo</option>
                                <option value="E. M. João Paulo II">E. M. João Paulo II</option>
                                <option value="E. M. João Vasconcelos Prado">E. M. João Vasconcelos Prado</option>
                                <option value="E. M. José do Prado Franco">E. M. José do Prado Franco</option>
                                <option value="E. M. José Ferreira Neto">E. M. José Ferreira Neto</option>
                                <option value="E. M. José Teixeira da Cruz">E. M. José Teixeira da Cruz</option>
                                <option value="E. M. Josefa de Santana">E. M. Josefa de Santana</option>
                                <option value="E. M. Leonel Brizola">E. M. Leonel Brizola</option>
                                <option value="E. M. Luana Rollemberg S de Meneses">E. M. Luana Rollemberg S de Meneses</option>
                                <option value="E. M. Major João Teles">E. M. Major João Teles</option>
                                <option value="E. M. Manoel Cunha">E. M. Manoel Cunha</option>
                                <option value="E. M. Manoel de Jesus Silva">E. M. Manoel de Jesus Silva</option>
                                <option value="E. M. Maria Rizonete Silva">E. M. Maria Rizonete Silva</option>
                                <option value="E. M. Mariana Prado Vasconcelos">E. M. Mariana Prado Vasconcelos</option>
                                <option value="E. M. Nair Menezes dos Santos">E. M. Nair Menezes dos Santos</option>
                                <option value="E. M. Nossa Senhora de Lourdes">E. M. Nossa Senhora de Lourdes</option>
                                <option value="E. M. Nossa Senhora do Socorro">E. M. Nossa Senhora do Socorro</option>
                                <option value="E. M. Padre Pedro">E. M. Padre Pedro</option>
                                <option value="E. M. Pedro Moreira Filho">E. M. Pedro Moreira Filho</option>
                                <option value="E. M. Professor Acrísio Cruz">E. M. Professor Acrísio Cruz</option>
                                <option value="E. M. Professor Donald">E. M. Professor Donald</option>
                                <option value="E. M. Professora Cristina Amaro">E. M. Professora Cristina Amaro</option>
                                <option value="E. M. Professora Elisa Teles">E. M. Professora Elisa Teles</option>
                                <option value="E. M. Professora Honorina Costa">E. M. Professora Honorina Costa</option>
                                <option value="E. M. Profa. Mª da Conceição Cruz">E. M. Profa. Mª da Conceição Cruz</option>
                                <option value="E. M. Profa. Mª São Pedro Vasconcelos"> E.M. Profa. Mª São Pedro Vasconcelos</option>
                                <option value="E. M. Professora Maria Vitória Costa">E. M. Professora Maria Vitória Costa</option>
                                <option value="E. M. Professora Neuzice Barreto Li">E. M. Professora Neuzice Barreto Lima</option>
                                <option value="E. M. Rosalvo Queiros">E. M. Rosalvo Queiros</option>
                                <option value="E. M. Santa Terezinha">E. M. Santa Terezinha</option>
                          </select><br>
                                </div>         
                                <br>
                                <div>
                                <div class="turno"></div>
                                <label> Turno:<br>
                                    <input type="radio" name="turno" value="manhã">Manhã<br>
                                    <input type="radio" name="turno" value="tarde">Tarde<br>
                                </label>
                                <div>
                                    <div class=" matricula"></div>
                                    <label> Matrícula:<br>
                                        <input type="radio" name="matricula" value="Pre-matrícula">Pré-matrÍcula<br>
                                        <input type="radio" name="matricula" value="Renovação">Renovação<br>
                                        <input type="radio" name="matricula" value="Transferência">Transferência<br>
                                    </label>
                                <hr>
        				        </div>
                                <div style="align-items: center;": 3;>
                               <p> <label>
                                    <input type="submit"  name="enviar" value="Enviar">
                                    <input type="reset" name="resetar" value="Limpar">
                        
                                </label></p>
                                </div>
            
            </body>
            </html>