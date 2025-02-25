<?
$h1           = 'Soluções de segurança da informação'; // Título principal
$description  = 'Deseja melhorar seus serviços no ERP TOTVS® e reduzir custos, adquirindo os melhores processos ? Então fale com a  Consultoria em Serviços TOTVS® Óperah Soluções Empresariais.'; // Descrição do serviço/ Palavra
$key          = ''; // Palavras chave relacionadas
$link = '';
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
	 				<p>A Óperah Soluções é uma integradora de soluções tecnológicas, a mais de 18 anos no mercado. Uma das soluções do portifólio, são soluções de Segurança da Informação.</p>

	 				<p>A sua empresa precisa trabalhar mais, para garantir que os benefícios e o potencial da Quarta Revolução Industrial sejam seguros para a sociedade. Portanto, segurança cibernética (ou cybersecurity, no termo em inglês) é a palavra de ordem e ultrapassa fronteiras!</p>
	 				<p>Líderes de grandes empresas globais, estão constantemente em busca de mais e melhores sistemas de proteção de dados.</p>

	 				<h2> Conheça mais sobre Soluções de segurança da informação</h2>
	 				<p>Pesquisa da consultoria russa de segurança para a internet Kaspersky Lab, em 2018, na América Latina, aponta que as grandes corporações estão destinando até 30% de seus orçamentos de TI para a segurança online, em uma estratégia de redefinição de proteção de dados corporativos. Sem cibersegurança, não há como digitalizar uma companhia, e uma companhia que não é digital, não sobrevive. Por isso é importante ter um processo de governança, porém não dá para fazer isso sem as ferramentas especializadas.</p> 

	 				<p>Fale conosco para soluções especialistas em cibersegurança para a sua empresa!</p>


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