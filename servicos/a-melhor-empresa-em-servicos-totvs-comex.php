<?
$h1           = 'A melhor empresa em Serviços TOTVS® COMEX'; // Título principal
$description  = 'Serviços TOTVS®: Ajudamos a sua empresa na implantação, suporte, manutenção, alocação de recursos e capacitação da solução. Somos a melhor empresa em  serviços TOTVS® COMEX.  Importação, Exportação, Siscomex, Siscoserv, Drawback e integrações.'; // Descrição do serviço/ Palavra
$key          = ''; // Palavras chave relacionadas
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
	 				<p>A Óperah Soluções, está presente há quase duas décadas no mercado brasileiro, com mais centenas de projetos entregues.</p>

	 				<p>Serviços TOTVS®: Ajudamos a sua empresa na implantação, suporte, manutenção, alocação de recursos e capacitação da solução. Somos a melhor empresa em  serviços TOTVS® COMEX.  Importação, Exportação, Siscomex, Siscoserv, Drawback e integrações.</p>

	 				<h3>Time Especialista:</h3>   

	 				<p>Temos times especialistas nos seguintes produtos TOTVS®:</p>
	 				<ul class="topicos">
	 					<li>Protheus®</li>
	 					<li>Desenvolvimento de projetos ADVPL</li>
	 					<li>Projetos personalizados           </li> 
	 				</ul>                                                                                         

	 				<p>Revitalização: você já tem a solução TOTVS® COMEX implantada e precisa otimizar processos, melhorar o uso, ter seu time capacitacidado para explorar todas as melhores práticas. Nosso time fará um diagnóstico, avalia e ajudará a sua empresa na melhoria e/ou implementação dos melhores recursos do sistema TOTVS®.</p>
	 				<p>Atuação: Atuamos  no Brasil em pequenas, médias e grandes empresas.</p> 



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