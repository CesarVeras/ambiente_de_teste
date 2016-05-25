<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"></meta>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>LPDS | UFSC</title>
</head>
<body>
	<div class="container">
		<ul class="topnav">
			<li><a id = "usa"href="english_index.html"><img src = "imagens/bandeira4.jpg"alt="English-USA"></a></li>
			<li><a id = "brasil"href="index.html"><img src = "imagens/bandeira2.png"alt="Português-BR"></a></li>
			<li class="icon"><a href = "javascript:void(0);"style="font-size:15px;"onclick="myFunction()">☰</a></li>
			<li><a href="#contact">Contatos</a></li>
			<li><a href="#coop">Cooperação</a></li>
			<li><a href="#members">Membros</a></li>
			<li><a href="#project">Pesquisas & Projetos</a></li>
			<li><a href="#news">Notícias</a></li>
			<li><a href="#home">Principal</a></li>
		</ul>
		<!--<div class="home-color">-->
		<div class="home-content" id="home">
			<h1>LPDS</h1>
			<p>
				O Laboratório de Pesquisas em Processamento Digital de Sinais, LPDS, foi estabelecido em 1988, com o objetivo de conduzir pesquisas na área de Processamento Digital de Sinais, com foco em Processamento Adaptativo de Sinais e Processamento de Imagens e Compressão de Sinais.
				As pesquisas e projetos são desenvolvidos com a contribuição de bolsistas de Iniciação Científica, Mestrado e Doutorado, bem como engenheiros e um administrador.
				Amplamente envolvido em pesquisas científicas e atividades de extensão junto à indústria e órgãos de fomento (CNPq, FINEP, CAPES, entre outros), o LPDS tem como filosofia formar pesquisadores independentes com sólido conhecimento teórico, os capacitando a decifrar uma extensa gama de desafios da Engenharia e a criar novas concepções e tecnologias que empregam sinais de voz, áudio, imagem e vídeo.
			</p>
			<br>
			<hr>
			<div class="awards">
				<?php
					include_once('conectaBanco.php');

					$conexao = conectaBanco('localhost', 'root', '123', 'lpds');

					function insereImagem($query){
						$dados = $conexao->query($query);
						while ($linha = $dados->fetch_assoc()) {
					   		echo '<div><img src="' . $linha['diretorio'] . '" alt="' . $linha['descricao'] . '" /></div>';
						}
					}
					$sql1 = 'SELECT diretorio,alt FROM imagens WHERE id < 6';
					insereImagem($sql1);
				?>
			</div>
			<hr>
		</div><!--end home-content -->
		<div class="home-content" id="news">
			<h1>Notícias</h1>
			<p class="date">15/10/2013</p>
			<p>
				Pesquisa nas áreas de Processamento de Sinais e Reconhecimento de Padrões é aplicada para auxiliar deficientes auditivos <a href="http://noticias.ufsc.br/2013/10/projeto-busca-viabilizar-a-comunicacao-de-deficientes-auditivos-pelo-telefone/">Notícias UFSC</a>
			</p>
			<p class="date">04/09/2012</p>
			<p>
				A Universidade Federal de Santa Catarina (UFSC) está na lista dos 9 melhores cursos de Engenharia Elétrica do Brasil. Segue abaixo a lista das outras universidades que, juntamente com a UFSC, tem cinco estrelas no ensino deste curso no país.
			</p>
			<ul>
				<li>Universidade Federal de Minas Gerais (UFMG)</li>
				<li>Universidade Federal de Campina Grande (UFCG)</li>
				<li>Pontifícia Universidade Católica do Rio de Janeiro (PUC-Rio)</li>
				<li>Universidade Federal do Rio de Janeiro (UFRJ)</li>
				<li>Universidade Federal do Rio Grande do Sul (UFRGS)</li>
				<li>Universidade Estadual de Campinas (Unicamp)</li>
				<li>Universidade de São Paulo (USP)</li>
				<li>Universidade de São Paulo (USP) – campus São Carlos</li>
			</ul>
			<p>Para maiores informações sobre o assunto pode ser acessado através do link: <a href="http://guiadoestudante.abril.com.br/blogs/melhores-faculdades/os-9-melhores-cursos-de-engenharia-eletrica-do-brasil">http://guiadoestudante.abril.com.br/blogs/melhores-faculdades/os-9-melhores-cursos-de-engenharia-eletrica-do-brasil</a></p>
			<br>
			<br>
			<div id="morenews">
				<a href="noticias.html">
					<?php
						sql2 = 'SELECT diretorio,alt FROM imagens WHERE id = 6'
						insereImagem($sql2);
					?>
				</a>
			</div>
			<hr>
		</div>
		<div class="home-content" id="project">
      		<h1>Pesquisas & Projetos</h1>

      		<div id="gallery">
        		<div id="primeiro-tema">
					<?php
						$sql3 = 'SELECT diretorio,alt FROM imagens WHERE id = 7';
						insereImagem($sql3);
					?>
	        	</div>
    			<div id="demais-temas">
					<?php
						$sql4 = 'SELECT diretorio,alt FROM imagens WHERE id BETWEEN 8 and 13'
						insereImagens($sql4);
					?>
    			</div>
    		</div>
			<hr>
  		</div>
		<div class="members" id="members">
			<h1>Membros</h1>
			<h6><a href="acessomembros.html">Acesso Membros</h6></a>
			<table width="100%">
			  <tr>
			    <td class="icon">
					<?php
						$sql5 = 'SELECT diretorio,alt FROM imagens WHERE id = 14';
						insereImagem($sql5);
					?>
			    </td>
			    <td class="icon">
					<?php
						$sql6 = 'SELECT diretorio,alt FROM imagens WHERE id = 15';
						insereImagem($sql6);
					?>
		        </td>
			    <td class="icon">
					<?php
						$sql7 =	'SELECT diretorio,alt FROM imagens WHERE id = 16';
						insereImagem($sql7);
					?>
			    </td>
			  </tr>
			  <tr>
			    <td>
			    	<h2> Professores </h2>
			    	Joceli Mayer, Ph.D.<br>
			    	José Carlos M. Bermudez, Ph.D.<br>
			    	Márcio Holsbach Costa, Dr.<br>
			    </td>
			    <td>
			    	<h2> Alunos de Doutorado </h2>
			    	Daniel Matos Montezano<br>
			    	Marcos Hideo Maruo<br>
			    	Renata Coelho Borges<br>
			    	Tales Cesar de Oliveira Imbiriba
			    </td>
			    <td>
			    	<h2> Alunos de Mestrado </h2>
			    	Rodrigo Borges Barcelos<br>
			    	Osmando Pereira Junior<br>
			    	Vinicius Morais Breda
			    </td>
			  </tr>
			  <tr>
			    <td class="icon">
					<?php
						$sql8 = 'SELECT diretorio,alt FROM imagens WHERE id = 17';
						insereImagem($sql8);
					?>
				</td>
			    <td class="icon">
					<?php
						$sql9 = 'SELECT diretorio,alt FROM imagens WHERE id = 18';
						insereImagem($sql9);
					?>
				</td>
			    <td class="icon">
					<?php
						$sql10 = 'SELECT diretorio,alt FROM imagens WHERE id = 19';
						insereImagem($sql10);
					?>
				</td>
			  </tr>
			  <tr>
			    <td>
			    	<h2> Alunos de Graduação </h2>
			    	Guilherme Santos
			    </td>
			    <td>
			    	<h2> Secretária </h2>
			    	Josiane Kirchner
			    </td>
			    <td>
			    	<h2> Ex-Alunos de Doutorado </h2>
			    	Guilherme Hosbach Costa<br>
			    	Marcelo V. W. Zibetti<br>
			    	Márcio Holsbach Costa<br>
			    	Odair Antonio Noskoski<br>
			    	Paulo Vinícius Koerich Borges<br>
			    	Pedro Inácio Hübscher<br>
			    	Sérgio José Melo de Almeida<br>
			    	Wemerson Delcio Parreira<br>
			    	Yasmin R. Montenegro Maluenda
			    </td>
			  </tr>
			  <tr>
			    <td class="icon">
					<?php
						$sql11 = 'SELECT diretorio,alt FROM imagens WHERE id = 20';
						insereImagem($sql11);
					?>
			   </td>
			    <td class="icon">
					<?php
						$sql12 = 'SELECT diretorio,alt FROM imagens WHERE id = 21';
						insereImagem($sql12);
					?>
			    </td>
			    <td class="icon">
					<?php
						$sql13 = 'SELECT diretorio,alt FROM imagens WHERE id = 22';
						insereImagem($sql14);
					?>
				</td>
			  </tr>
			  <tr>
			    <td>
			    	<h2> Ex-Alunos de Mestrado </h2>
			    	André Hallack Miranda Pureza<br>
			    	Cássio Guimarães Lopes<br>
			    	Celso Henrique Herédias Ribas<br>
			    	Charles Santos Ludovico<br>
			    	Daniel Matos Montezano<br>
			    	Eduardo Hermesmeyer<br>
			    	Joaquim De Mira Junior<br>
			    	Luiz Felipe da Silva<br>
			    	Marcelo V. W. Zibetti<br>
			    	Nelson Campaner<br>
			    	Paulo Vinícius Koerich Borges<br>
			    	Renata Coelho Borges<br>
			    	Victor Bissoli Nicolau<br>
			    	Yasmin R. Montenegro Maluenda<br>
			    </td>
			    <td>
			    	<h2> Ex-Alunos de Graduação </h2>
			    	Anderson Vieira Silvério<br>
			    	André Ricardo Silva<br>
			    	Angela Crepaldi<br>
			    	Daniel Gomes<br>
			    	Deise Horn<br>
			    	Eugenio Koji Zenin<br>
			    	Fernando Varela<br>
			    	Guilherme Moraes Levien<br>
			    	Hugo Bezerra Menezes Leite<br>
			    	Leandro Ronchini Ximenes<br>
			    	Luiz Felipe de Lima Oliveira Silva<br>
			    	Mario Baldini<br>
			    	Matheus de Franceschi Rossetto<br>
			    	Pedro Veit Michel<br>
			    	Rafael Hoffmann Paludo<br>
			    	Richard Henry Sutter Rosendo<br>
			    	Thiago Hideki Akinaga<br>
			    </td>
			    <td>
			    	<h2> Ex-Estagiários </h2>
			    	André Ikeda Cantão<br>
			    	Anita Sant’Anna<br>
			    	Boby Zeniti Sinzato<br>
			    	Eduardo Bombieri<br>
			    	José Rodolfo Odebrecht<br>
			    	Júlia Vianna Gallinaro<br>
			    	Viriato Correa Pahim<br>
			    </td>
			  </tr>
			</table>
			<hr>
		</div><!--end members -->
		<div class="home-content" id ="coop">
			<h1>Cooperação</h1>
				<?php
					$sql14 = 'SELECT diretorio,alt FROM imagens WHERE id = 23';
					insereImagem($sql14);
				?>
			<hr>
		</div>
		<div class="home-content" id="contact">
			<h1>Contatos</h1>

				<div>
				<address><pre>
				<b>LABORATÓRIO DE PESQUISAS EM PROCESSAMENTO DIGITAL DE SINAIS</b><br>
				Departamento de Engenharia Elétrica
				Centro Tecnológico
				Universidade Federal de Santa Catarina
				Florianópolis, Santa Catarina - Brasil
				CEP: 880040-900
				Contato: +55 48 3721-7719
				www.lpds.ufsc.br lpds@lpds.ufsc.br
				</adress>

				<b>COORDENAÇÃO E SUPERVISÃO</b><br>
				Coordenador e Supervisor do LPDS
				Prof. Joceli Mayer
				E-mail: <a href="mailto:joceli.mayer@lpds.ufsc.br">joceli.mayer@lpds.ufsc.br</a><br>
				<b>SUPORTE</b><br>
				Secretária do LPDS
				Anna Catharina de Mendonça Paes
				E-mail: <a href="mailto:anna@lpds.ufsc.br">anna@lpds.ufsc.br</a>
					</pre>
					<br>
					</div>
				</div>


		</div><!--end contact -->
		<div class="footer">
			<p>© 2016 - Universidade Federal de Santa Catarina - UFSC Departamento de Engenharia Elétrica<br>
				UFSC - EEL - CTC - LPDS Campus Universitário - Trindade<br>
				Florianópolis - Santa Catarina - Brasil - CEP 88040-900<br>
				Fone: +55 (48) 3721-7719  Fax: +55 (48) 3721-9280<br>
				E-mail: lpds@lpds.ufsc.br<br></p>
		</div><!--end footer-->
	</div><!--end container-->
	<!-- rgb(62,148,163)-->
	<!-- rgb(52,173,192)-->
	<!-- rgb(122,196,223)-->
	<!-- rgb(183,223,249)-->
<script>
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>
$conexao->close();

?></body>
</html>
