<?
$h1           = 'Empresa Referência Nacional'; // Título principal
$description  = 'A Óperah Soluções Empresariais e Tecnologia, é uma integradora de soluções e tecnologia, Empresa Referência Nacional há mais de 18 anos.'; // Descrição do serviço/ Palavra
$key          = ''; // Palavras chave relacionadas
$link = 'https://linkedin.com/company/óperah-soluções-empresariais/';
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
	 				<p>A Óperah Soluções Empresariais e Tecnologia, é uma integradora de soluções e tecnologia, <strong>Empresa Referência Nacional</strong> há mais de 18 anos.   O nosso objetivo,  é levar cultura digital, inovação e transformação digital à sua empresa, aplicando as melhores soluções para o seu ambiente.</p>                                                                                                               

	 				<p>A Óperah Soluções, Empresa Referência Nacional, também consquistou em seus anos de trabalhos, prêmios e certificados, que atestam a qualidade de seus serviços e a ética , com que realiza as suas atividades.</p>  

	 				<p><strong>Confira abaixo:</strong></p>
	 				<p>2018 - uma das soluções da empresa, foi indicada como sustentável no Prêmio Eco 35 Anos AMCHAM Brasil São Paulo; </p>                           
	 				<p>2019 - Empresa reconhecida por Mérito, a Óperah Soluções, recebe  o Selo Prêmio Referência Nacional ANCEC;</p>                                                           
	 				<p><strong>Veja o link</strong>: <a href="https://www.youtube.com/watch?v=FEr4r6jHtRc&t=6s" title="Empresa Referência Nacional">https://www.youtube.com/watch?v=FEr4r6jHtRc&t=6s</a></p>
	 				<p>2019: tivemos indicações para os Prêmios: Latin American Quality Institute e do I.N.Q.S - Qualidade Master Águia Americana entre outros.</p>

	 				<p>Estamos à disposição, para fazermos ótimos negócios!</p>
	 				<p>Conte com a gente!</p>                                                                            


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