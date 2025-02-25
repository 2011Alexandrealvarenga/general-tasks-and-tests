<?
$h1           = 'Responsabilidade Social'; // Título principal
$description  = 'Entendemos que uma empresa sustentável e inovadora, busca também, apoiar causas socias e levar ao mundo, uma contribuição de apoio  e Responsabilidade Social.'; // Descrição do serviço/ Palavra
$key          = ''; // Palavras chave relacionadas
$link = 'https://www.linkedin.com/company/ópera-soluções-empresariais/';
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
	 				<p>A Óperah Soluções Empresariais e Tecnologia, atua há quase 2 décadas, levando inovação, segurança, transformação digirtal e soluções de tecnologia para a sua empresa.</p>                                                           

	 				<p>Entendemos que uma empresa sustentável e inovadora, busca também, apoiar causas socias e levar ao mundo, uma contribuição de apoio  e Responsabilidade Social.</p>

	 				<p><strong>Apoiamos causas como:</strong></p>

	 				<p><strong>INAC:</strong> Instituto não Aceito Corrupção: focado no enfrentamento da Corrupção nas frentes:
	 				Pesquisa, Politicas públicas e educação.</p>
	 				<p><strong>site:</strong>  <a href="http://naoaceitocorrupcao.org.br/" title="Não aceito corrupção">http://naoaceitocorrupcao.org.br/</a></p>  

	 				<p><strong>Guardiões da Esperança:</strong> apoio ao menos favorecidos, como: moradores de ruas, Casa de Repouso: Lar das Maezinhas, e crianças carentes;
	 				  	 				<strong>site:</strong> <a href="https://www.guardioesdaesperanca.org/" title="Guardiões da Esperança">https://www.guardioesdaesperanca.org/</a></p>  

	 				<p><strong>Causas da Mulher:</strong> eventos, causas, mulheres em vulnerabilidade, etc.</p>


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