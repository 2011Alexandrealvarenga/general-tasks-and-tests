<?
$h1           = 'Luciane Abramo'; // Título principal
$description  = 'Luciane Abramo, é Administradora de Empresas, empresária, Palestrante e Mulher de Negócios, há quase 20 anos.'; // Descrição do serviço/ Palavra
$key          = 'Empresa especializada em soluções, Empresa especializada em TOTVS®, Empresa TOTVS®, especialização em serviços TOTVS®'; // Palavras chave relacionadas
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
	 				<p>Luciane Abramo, é Administradora de Empresas, empresária, Palestrante e Mulher de Negócios, há quase 20 anos.</p> 
	 				<p><strong>Pós-Graduada e com especializações:</strong> FGV: Negócios na Era Digital; Controladoria e Finanças; Gestão de Pessoas; SENAC: Gestão de Projetos; USP: Ciência política; MIT: You Can Innovate: Use Innovation & Entrepreneurship entre diversos cursos e Seminários.</p>
	 				<p>Fundadora da empresa Óperah Soluções Empresariais, que leva inovação e transformação digital para o mundo corporativo. Possui mais de centenas de projetos entregues para pequenas a grandes empresas.</p> 
	 				<p>Tem atuado de forma expressiva no atendimento em soluções de audiovisual, startups e negócios de tecnologia e inovação, em sua empresa Operah Soluções. Tem construido de maneira ágil, uma visão de atendimento 360º em transformação digital, rumo a Indústria 4.0, para atender clientes e oportunidades de negócios.</p>

	 				<h2>SEBRAE</h2>
	 				<p>Em 2016, foi finalista do Prêmio Mulheres de Negócios SEBRAE entre 11 000 mulheres no Brasil.</p>
	 				<p>O PRÊMIO, valoriza histórias de mulheres que transformaram seus sonhos em realidade e são exemplos para o empreendedorismo brasileiro.</p>                                                                                                        
	 				<p><strong>Link:</strong> <a href="https://www.linkedin.com/pulse/pr%C3%AAmio-mulher-de-neg%C3%B3cios-2015-sebrae-luciane-abramo/" title="">https://www.linkedin.com/pulse/pr%C3%AAmio-mulher-de-neg%C3%B3cios-2015-sebrae-luciane-abramo/</a></p>                                                                                        

	 				<h2>INSPIRAÇÃO PARA MULHERES</h2>
	 				<p>Reconhecida em 2018, sua história, foi escolhida pelo SEBRAE e Revista Exame como “Inspiração da Mulher Brasileira, diante aos obstáculos do empreendedorismo’;</p>
	 				<p><strong>Link:</strong> <a href="https://exame.abril.com.br/pme/mulheres-dao-a-forca-ao-empreendedorismo-no-brasil/" title="">https://exame.abril.com.br/pme/mulheres-dao-a-forca-ao-empreendedorismo-no-brasil/</a></p>


	 				<p>Está à frente e atuante em causas sociais, profissionais e com sua empresa, nas ONG´s:</p>
	 				<ul class="topicos">
	 					<li><strong>INAC – Instituto não Aceito Corrupção;</strong></li>
	 					<li><strong>Guardiões da Esperança – ajudando moradores de rua e senhoras idosas;</strong></li>
	 					<li><strong>Grupo Mulheres do Brasil</strong></li>
	 					<li><strong>SEBRAE | Mulheres de Negócios – Capital Sul</strong></li>
	 					<li><strong>ONU Mulheres - WEPs, visando o empoderamento feminino e inclusão social.</strong></li>
	 				</ul>
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