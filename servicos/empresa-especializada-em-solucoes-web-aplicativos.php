<?
$h1           = 'Empresa especializada em Soluções Web e Aplicativos'; // Título principal
$description  = 'Somos uma empresa especializada em soluções WEB, aplicativos e projetos personalizados.  Aplicamos as melhores soluções para o seu ambiente.'; // Descrição do serviço/ Palavra
$key          = ''; // Palavras chave relacionadas
$link = 'https://operah.com.br/solucoes/?cat=8&link=consultoria-negocios';
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
	 				<p>A Óperah Soluções é uma integradora de soluções de tecnologia, há mais de 18 anos. </p>  
	 				<p>Somos uma empresa especializada em soluções WEB, aplicativos e projetos personalizados.  Aplicamos as melhores soluções para o seu ambiente.</p>                                                                                     
	 				<p>A Óperah Soluções, também conquistou em seus anos de trabalhos, prêmios e certificados, que atestam a qualidade de seus serviços e a ética com que realiza as suas atividades.</p>                                                                                                              
	 				<h2> Saiba mais sobre Empresa especializada em Soluções Web. Aplicativos</h2>

	 				<p><strong>FOCO</strong>: redução de custos, projetos disruptivos, performance e inovação para as suas atividades.</p>  

	 				<h3>O que oferecemos para a sua empresa</h3>
	 				<ul>
	 					<li>A Óperah Soluções, atua com a as melhores soluções de mercados.</li>    
	 					<li>Somos uma empresa que ajuda a sua companhia na implantação de tecnologia.</li> 
	 					<li>Estamos em São Paulo | Brasil e podemos ajudá-los com a transformação digital, rumo as inovações do mercado 4.0.</li>   
	 				</ul>                                                                                                         

	 				<h3>SOLUÇÕES</h3>                                                                                              <ul>                      
	 					<li>Projetos Personalizados </li>
	 					<li>Web </li>
	 					<li>Desenvolvimento de Aplicativos </li>
	 					<li>ERP sob medida para o seu negócio   </li>
	 				</ul>
	 				<p>Você tem o escopo e a necessidade? Nos te ajudamos no desenvolvimento das soluções.</p>                                                                                    
	 				<p>Fale com a gente!</p>


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