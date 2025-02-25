<?
$h1           = 'Empresa especializada em serviços TOTVS®'; // Título principal
$description  = 'A Óperah Soluções empresa especialiazda em serviços TOTVS® está presente há quase duas décadas no mercado brasileiro, com mais centenas de projetos entregues.'; // Descrição do serviço/ Palavra
$key          = 'Empresa especializada em soluções, Empresa especializada em TOTVS®, Empresa TOTVS®, especialização em serviços TOTVS®'; // Palavras chave relacionadas
$link = 'https://operah.com.br/solucoes/?cat=7&link=solucoes-totvs';
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
	 				<p><strong>SERVIÇOS TOTVS®:</strong> Ajudamos a sua empresa na implantação, suporte, manutenção, alocação de recursos e capacitação da solução. Somos uma empresa especializada em serviços TOTVS®.</p>                                                                     
	 				<p>Time Especialista: Temos times especialistas nos seguintes produtos TOTVS®:</p> 
	 				<ul>
	 					<li><strong>Protheus®</strong></li>
	 					<li><strong>Datasul®/Progress</strong></li>
	 					<li><strong>RM                   </strong></li>
	 					<li><strong>Desenvolvimento de projetos ADVPL  </strong></li>
	 					<li><strong>Projetos personalizados     </strong></li>
	 				</ul>
	 				<p>Revitalização: você já tem a solução TOTVS® implantada e precisa otimizar processos, melhorar o uso, ter seu time capacitado para explorar todas as melhores práticas. Nosso time fará um diagnóstico, avalia e ajudará a sua empresa na melhoria e/ou implementação dos melhores recursos do sistema TOTVS®.</p>   

	 				<h2> Conheça mais sobre a Empresa especializada em serviços TOTVS®</h2>  

	 				<p>Mercado: Atuamos no Brasil em pequenas, médias e grandes empresas.</p> 

	 				<p>Experiência: Temos experiência em diversos segmentos de mercado.</p>

	 				<p>EXPERIÊNCIA DO USUÁRIO (UX):   Como empresa especialista em serviços TOTVS®, construímos com a sua empresa, os melhores usos de soluções completas, para o resultado esperado.</p>

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