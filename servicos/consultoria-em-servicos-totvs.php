<?
$h1           = 'Consultoria em serviços TOTVS®'; // Título principal
$description  = 'Deseja melhorar seus serviços no ERP TOTVS® e reduzir custos, adquirindo os melhores processos ? Então fale com a  Consultoria em Serviços TOTVS® Óperah Soluções Empresariais.'; // Descrição do serviço/ Palavra
$key          = ''; // Palavras chave relacionadas
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
	 				<p>Deseja melhorar seus serviços no ERP TOTVS® e reduzir custos, adquirindo os melhores processos da solução?</p> 
	 				<p>Então fale conosco, da Óperah Soluções Empresariais!</p> 
	 				<p>Oferecemos consultoria em serviços no ERP TOTVS® e faremos um alinhamento sobre seus projetos e expectativas de seu ambiente empresarial.</p> 
	 				<p>Na Óperah Soluções, você terá acesso aos melhores especialistas, que ajudará a sua empresa com a performance, melhoria dos processos já utilizados no seu ERP TOTVS®.</p>
	 				  <h2>Procura por Consultoria em serviços TOTVS® ?</h2>
	 				<p>Seja uma implantação de um novo módulo, capacitação, suporte, serviços em ADVPL, nos dá Óperah Soluções, iremos te ajudar no melhor cenário.</p> 
	 				<p>Soluções FISCAL, Soluções COMEX - Importação, Exportação, Drawback, Incoterm, Siscoserv; Soluções para RH e consultoria na governança de TI, para o melhor uso do seu sistema.</p>                                
	 				<p>Aumente a receita dos acionistas, reduza custos da operação e otimize seus recursos, inovando rumo à indústria 4.0.</p>


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