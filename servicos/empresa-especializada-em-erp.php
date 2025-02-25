<?
$h1           = 'Empresa especializada em ERP'; // Título principal
$description  = 'Deseja melhorar seus serviços no ERP TOTVS® e reduzir custos, adquirindo os melhores processos da solução? Então fale com a Empresa especializada em erp.'; // Descrição do serviço/ Palavra
$key          = 'Empresa especializada em soluções, Empresa especializada em TOTVS®, Empresa TOTVS®, especialização em serviços TOTVS®'; // Palavras chave relacionadas
$link = 'https://operah.com.br/solucoes/?cat=7&link=solucoes-TOTVS®';
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
					<!-- Imagem referente ao serviço -->
					<div class="texto">
					<?php /*
							Inserir linkagem internas no texto
							Utilizar o h1 apenas no padrão $h1 'Título da Página de Exemplo'
							Seguir a sequência dos títulos conforme exemplo
	 				*/ ?>
	 				<p>A Óperah Soluções, está presente há quase duas décadas no mercado brasileiro, com mais centenas de projetos entregues.</p>                                              
	 				<p><strong>SERVIÇOS TOTVS®:</strong> Ajudamos a sua empresa na implantação, suporte, manutenção, alocação de recursos e capacitação da solução.</p>    
	 				<p><strong>Somos uma empresa especializada em ERP, serviços TOTVS®.</strong></p>

	 				<p><strong>Time Especialista:</strong>   Temos times especialistas nos seguintes produtos TOTVS®:</p>

	 				<ul class="topicos">                                                          
	 					<li><strong>Protheus®</strong></li>
	 					<li><strong>Datasul® /Progress</strong></li>
	 					<li><strong>RM®</strong></li>
	 					<li><strong>Desenvolvimento de projetos</strong></li>
	 					<li><strong>ADVPL</strong></li>
	 					<li><strong>Projetos personalizados</strong></li>
	 				</ul>                 
	 				<p><strong>Revitalização:</strong> você já tem a solução TOTVS® implantada e precisa otimizar processos, melhorar o uso, ter seu time capacitado para explorar todas as melhores práticas. Nosso time avalia e ajudará a sua empresa na melhoria e/ou implementação dos melhores recursos do sistema TOTVS®.</p>  

	 				<p><strong>Mercado:</strong>   Atuamos no Brasil em pequenas, médias e grandes empresas.</p> 
	 				<p><strong>Experiência:</strong> Temos experiência em diversos segmentos de mercado.</p>

	 				<h2>Conheça mais sobre Empresa especializada em erp</h2>

	 				<p><strong>EXPERIÊNCIA DO USUÁRIO (UX):</strong>   

	 					<p>Construímos com a sua empresa, os melhores usos de soluções completas, para o resultado esperado.</p>

	 					<p>Deseja melhorar seus serviços no ERP TOTVS® e reduzir custos, adquirindo os melhores processos da solução? Então fale conosco, da Óperah Soluções Empresariais, que faremos um alinhamento sobre os seus projetos e expectativas de seu ambiente empresarial.</p>

	 					<p>Na Óperah Soluções, você terá acesso aos melhores especialistas, que ajudará a sua empresa com a performance, melhoria dos processos já utilizados no seu ERP TOTVS®.</p>

	 					<p>Seja uma implantação de um novo módulo, capacitação, suporte, consultoria em serviços ADVPL, nos dá Óperah Soluções, iremos te ajudar no melhor cenário.</p>


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