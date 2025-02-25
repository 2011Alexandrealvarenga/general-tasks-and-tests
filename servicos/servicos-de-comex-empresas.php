<?
$h1           = 'Serivço de Comex para Empresas'; // Título principal
$description  = 'Possuímos Serivço de Comex para Empresas, para ajudar a sua empresa com a Implantação, Treinamento, Suporte e projetos personalizados.'; // Descrição do serviço/ Palavra
$key          = 'Empresa especializada em soluções, Empresa especializada em TOTVS®, Empresa TOTVS®, especialização em soluções TOTVS®'; // Palavras chave relacionadas
$link = 'https://operah.com.br/solucoes/?cat=7&produto=4&link=comex';
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

	 				<p>Possuímos time especializado, para ajudar a sua empresa com a Implantação, Treinamento, Suporte e projetos personalizados em soluções TOTVS® COMEX:</p>

	 				<h2>Conheça os tipos de serivço de comex para empresas</h2>

	 				<h3>Importação</h3>
	 				<p>Automação, controle e monitoramento gerencial das operações de importação, incluindo controle de solicitações e pedidos de importação, LI e DI, desembaraço, Exportação Gestão de operações de exportação que oferece controle e monitoramento do processo, gerenciando pedidos, embarques, emissão de documentos, Câmbio Oferece controle de financiamentos de importação e exportação com visão detalhada sobre contratos e informações relacionadas aos juros, geração de dados para NF-e e câmbio, além de integração ao Siscomex e aos principais softwares de despachantes.</p>


	 				<h3>Exportação</h3>
	 				<p>Gestão de operações de exportação que oferece controle e monitoramento do processo, gerenciando pedidos, embarques, emissão de documentos, certificados, relatórios, follow-ups, integração com o Siscomex e controles cambiais.</p>


	 				<h3>Câmbio</h3>
	 				<p>Oferece controle de financiamentos de importação e exportação com visão detalhada sobre contratos e informações relacionadas aos juros, encargos prazos e vinculações. Também controla as modalidades de ACC/ACE, Pré- pagamento, FINIMP e Securitização.</p>

	 				<h3>Siscoserv</h3>
	 				<p>Simplifica o registro de aquisições ou vendas de serviços no exterior junto ao Siscoserv e auxilia na gestão dos prazos, evitando penalidades. Automatiza as operações de registros, retificações, aditivos e cancelamentos, com integração para recebimento de pedidos de serviços, além do envio e baixa de títulos relacionados ao câmbio dos serviços.</p>

	 				<h3>Drawback</h3>
	 				<p>Automatização das operações no regime especial de Drawback, e também para o controle e monitoramento das obrigações e ganhos com este regime. Gerencia atos concessórios, aditivos, importação de dados de RE e DI, provendo relatórios gerenciais e follow-ups de controle.</p>

	 				<h3>Conteúdo</h3>
	 				<p>Oferta exclusiva no mercado que agrega informação inteligente, completa e atualizada, para recuperar diariamente e de forma automática dentro do módulo de Importação as principais informações de NCM, alíquotas de impostos, taxas de câmbio, licenciamento de importação e outros conteúdos relevantes ao comércio exterior.</p>

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