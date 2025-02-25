<?
$h1           = 'Empresa com reconhecimento SEBRAE'; // Título principal
$description  = 'Representando a empresa Óperah Soluções Empresarias - empresa com reconhecimento sebrae, a CEO Luciane Abramo,  foi finalista no ‘17o Prêmio Mulheres de Negócios 2016’ - SEBRAE'; // Descrição do serviço/ Palavra
$key          = 'Empresa especializada em soluções, Empresa especializada em TOTVS®, Empresa TOTVS®, especialização em soluções TOTVS®'; // Palavras chave relacionadas
$link = 'https://operah.com.br/';
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
	 				<p>Representando a empresa Óperah Soluções Empresarias, a CEO Luciane Abramo, foi finalista no ‘17o Prêmio Mulheres de Negócios 2016’ - SEBRAE.</p>
	 				<p>Foram mais de 11 mil inscritas no Brasil!</p> 
	 				<p>O PRÊMIO, valoriza histórias de mulheres que transformaram seus sonhos em realidade e são exemplos para o empreendedorismo brasileiro.</p>                                                                                                        
	 				<p><strong>Link:</strong><a href="https://www.linkedin.com/pulse/pr%C3%AAmio-mulher-de-neg%C3%B3cios-2015-sebrae-luciane-abramo/" title="">https://www.linkedin.com/pulse/pr%C3%AAmio-mulher-de-neg%C3%B3cios-2015-sebrae-luciane-abramo/</a></p>                                                                                        
	 				<p>Em 2018, o SEBRAE e a REVISTA EXAME, publicaram a história da Óperah Soluções Empresariais, onde a fundadora Luciane Abramo, foi considerada como: Inspiração da Mulher Brasileira diante as dificuldades do empreendedorismo brasileiro.</p>   
	 				<p><strong>Link:</strong><a href="https://exame.abril.com.br/pme/mulheres-dao-a-forca-ao-empreendedorismo-no-brasil/" title="">https://exame.abril.com.br/pme/mulheres-dao-a-forca-ao-empreendedorismo-no-brasil/</a></p>
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