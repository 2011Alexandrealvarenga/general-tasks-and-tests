<?
$h1           = 'ID Card'; // Título principal
$description  = 'ID CARD da Óperah Soluções. É um cartão personalizado e inovador, com a produção de imagens do profissional, vídeo auto-apresentativo de expertises e principais serviços do profissional.'; // Descrição do serviço/ Palavra
$key          = 'Empresa especializada em soluções, Empresa especializada em TOTVS®, Empresa TOTVS®, especialização em soluções TOTVS®'; // Palavras chave relacionadas
$link = 'https://operah.com.br/solucoes/idcard/';
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
	 				<p><strong>ID CARD da Óperah Soluções</strong>, é um cartão personalizado e inovador, com a produção de imagens do profissional, vídeo <strong>auto-apresentativo</strong> de expertises e principais serviços do profissional.</p> 
	 				
	 				<h2>Esqueça o seu cartão de visitas tradicional!</h2>
	 				<p>O ID CARD, é para ser utilizado por celular(mobile), para envios através de WhatsApp, E-mail e Redes Sociais (Não entra imagens da empresa, apenas Logomarcas).</p>

	 				<h3><strong>INOVAÇÃO</strong></h3>
	 				<p>Se diferenciar e sair à frente, quando falamos de apresentação Profissional com seu time comercial, áreas corporativas e toda a empresa!</p>   
	 				<p>O ID CARD é para empresas inovadoras e que estão no movimento da indústria 4.0.</p>

	 				<h3><strong>Benefícios do ID CARD</strong></h3>
	 				<ul class="topicos">
	 					<li><strong>Reduz custos com desenvolvimento de cartões de visitas tradicional</strong></li>
	 					<li><strong>ROI IMENSURÁVEL</strong></li>
	 					<li><strong>Fala com clientes e toda a cadeia produtiva, onde você poderá integrar seu e-mail e redes sociais</strong></li>
	 					<li><strong>Atinge de maneira personalizada, o maior número de interessados de seu público alvo</strong></li>
	 					<li><strong>Aumento de vendas</strong></li>
	 					<li>Fala com o seu público em um único clique!</li>
	 				</ul>

	 				<p><strong>e muito mais!</strong></p>                                                                                            
	 				<p>Quer vender mais e seu cliente te encontrar na palma da mão?!</p>

	 				<p>Então fale com a Óperah Soluções e crie o seu ID CARD!</p>


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