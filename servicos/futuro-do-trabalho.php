<?
$h1           = 'Futuro do Trabalho'; // Título principal
$description  = 'O nosso objetivo como especialista em soluções empresariais para o futuro do trabalho, é levar cultura digital, inovação e transformação digital à sua empresa.'; // Descrição do serviço/ Palavra
$key          = 'Empresa especializada em soluções, Empresa especializada em TOTVS®, Empresa TOTVS®, especialização em soluções TOTVS®'; // Palavras chave relacionadas
$link = 'https://operah.com.br/solucoes/?cat=26&link=';
include('inc-y/head.php');
?>
</head>
<body>
	<?php include 'inc-y/topo.php'; ?>
	<main>
		<div class="base">
			<div class="conteudo-box">
				<article class="conteudo">
					<?=breadcrumb()?> <!-- Caminho de páginas-->
					<h1><a href="<?=$nomePagina?>" rel="bookmark" title="<?=$h1?>"><?=$h1?></a></h1> <!-- Título principal, obrigatório -->
					<? if($exibirGaleria == true) : include("inc-y/galeria.php"); galeria(); endif; ?> <!-- Imagem referente ao serviço -->
					<div class="texto">
					<?php /*
							Inserir linkagem internas no texto
							Utilizar o h1 apenas no padrão $h1 'Título da Página de Exemplo'
							Seguir a sequência dos títulos conforme exemplo
	 				*/ ?>
	 				<p>A Óperah Soluções é uma integradora de soluções de tecnologia, há mais de 18 anos.</p>   
	 				<p>O nosso objetivo como especialista em soluções empresariais, é levar cultura digital, inovação e transformação digital à sua empresa, aplicando as melhores soluções para o seu ambiente.</p>
	 				<p>Foco: redução de custos, projetos disruptivos, performance e inovação para as suas atividades.</p>    

	 				<h2>Conheça as soluções do futuro do trabalho</h2> 
	 				<p>A Óperah Soluções, atua com a as melhores soluções de mercados.</p>    
	 				<p>Somos uma empresa que ajuda a sua companhia na implantação de tecnologias disruptivas.</p>              

	 				<h3>Nas soluções sobre futuro do trabalho, ajudamos a sua empresa: </h3>
	 				<ul>
	 					<li>Feedbacks contínuo, em ambiente de segurança psicológica</li>
	 					<li>Feedbacks entregues como um Presente de Desenvolvimento </li>
	 					<li>Avaliação de Competências com método exclusivo </li>
	 					<li>Gamificação, que estimula o engajamento e a construção da Cultura</li>
	 					<li>Algoritmos de Inteligência Artificial que formam uma rede de trabalho e automatiza os pedidos de feedbacks</li>
	 					<li>Templates que guiam a construção de Metas, Avaliações e Feedbacks</li>
	 					<li>O tema Gestão de Desempenho e Feedback Contínuo. </li>
	 				</ul>
	 				<p>Quer saber mais sobre o tema Futuro do Trabalho? Fale com a Óperah Soluções.</p>


	 			<p class="dizeres">As marcas Protheus®, Datasul®, Fluig®, RM® ®Todos os direitos reservados à TOTVS S.A.</p>   
	 			</div>
	 			<?php include_once 'inc-y/includes-padrao-conteudo.php'; ?> <!-- Conteúdo importante para links internos-->
	 			<?php include 'inc-y/contato.php'; ?>	
	 		</article>
	 		<?php include 'inc-y/menu-lateral.php'; ?> <!-- Menu lateral há página, exibindo as páginas relacionadas-->
	 	</div>
	 	
	 	<div class="clear"></div>
	 </div>
	</main>
	<?php include 'inc-y/rodape.php'; ?>
</body>
</html>