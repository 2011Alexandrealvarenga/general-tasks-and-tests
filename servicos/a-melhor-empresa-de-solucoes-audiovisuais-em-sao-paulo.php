<?
$h1           = 'A Melhor empresa de soluções audiovisuais em São Paulo'; // Título principal
$description  = 'O nosso objetivo é ajudá-los na cultura digital, conheça A Melhor empresa de soluções audiovisuais em São Paulo.'; // Descrição do serviço/ Palavra
$key          = ''; // Palavras chave relacionadas
$link = 'https://operah.com.br/solucoes/?cat=12&link=produtora';
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
	 				<p>A Óperah Soluções é uma integradora de soluções de tecnologia, Telecom e audiovisual, há mais de 18 anos.</p>   
	 				<p>O nosso objetivo é ajudá-los na cultura digital, inovação e transformação digital da sua empresa, aplicando as melhores soluções para o seu ambiente.</p>                                                                                                                                                          
	 				<p><strong>Foco:</strong> qualidade, redução de custos, performance e inovação para as suas atividades.</p>                                                                                                                                                        

	 				<h2>O QUE FAZEMOS</h2>
	 				<p>A Óperah Soluções, atua com a as melhores soluções do mercado. para empresas como a sua, com espírito inovador, à frente da inovação e tecnologia.</p>
	 				<p>Somos a Melhor empresa de soluções audiovisuais em São Paulo!</p>  
	 				<ul>
	 					<li>1. Direção Artística Premiada Internacionalmente</li>
	 					<li>2. Profissionais extremamente competentes</li>
	 					<li>3. Capacidade de produção </li>
	 					<li>4. Equipamentos Top de linha</li>
	 					<li>5. Atendimento dedicado 100% em seu projeto</li>
	 				</ul>

	 				<h2>Saiba mais sobre A Melhor empresa de soluções audiovisuais em São Paulo</h2>

	 				<p>Desenvolvemos as melhores soluções audiovisuais.</p>                                                                                                                                          
	 				<p>Temos e atuamos com as melhores Soluções audiovisuais corporativas!</p> 
	 				<p>Deseja ter o melhor em audiovisual com quem conhece e ainda, ter seu projeto com Direção Artística?</p> 
	 				<p>Desenvolvemos Web séries, Filmes Institucionais, Projetos Personalizados para o seu negócio com profissionalismo e qualidade!</p> 
	 				<p>Profissionais altamente qualificados, com mais de 20 anos de experiência em TV, Netflix, HBO, diversos prêmios de reconhecimentos.</p> 
	 				<p>Invista seu projeto, com quem sabe e entende de obras audiovisuais.</p>  
	 				<p>O ROI é imensurável.</p>    

	 				<p>Fale com quem entende de filme!</p>  


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