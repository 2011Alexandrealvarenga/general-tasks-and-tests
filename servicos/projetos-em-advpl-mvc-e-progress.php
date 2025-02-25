<?
$h1           = 'Projetos em ADVPL/ MVC e Progress'; // Título principal
$description  = 'O nosso objetivo, é ajudar a sua empresa, com nossos Projetos em ADVPL/ MVC e Progress. Conheça a Operah Soluções.'; // Descrição do serviço/ Palavra
$key          = ''; // Palavras chave relacionadas
$link = 'https://operah.com.br/solucoes/?cat=7&produto=1&link=erp';
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
	 				<p>A Óperah Soluções é uma integradora de soluções de tecnologia, há mais de 18 anos.</p>   
	 				<p>O nosso objetivo, é ajudar a sua empresa, com nossos serviços de Integrações de Aplicações e Tecnologia, cultura digital, inovação e transformação digital, aplicando as melhores soluções para o seu ambiente.</p>  

	 				<h2>Saiba mais sobre Projetos em ADVPL/ MVC e Progress</h2>
	 				<p>A Óperah Soluções, também conquistou em seus anos de trabalhos, prêmios e certificados, que atestam a qualidade de seus serviços e a ética com que realiza as suas atividades.</p>                               

	 				<p><strong>FOCO: redução de custos, performance e inovação para as suas atividades.</strong> </p>                                                                                                                                      
	 				<h3>SERVIÇOS TOTVS®</h3>

	 				<p><strong>SERVIÇOS TOTVS®:</strong></p> 
	 				<ul class="topicos">
	 					<li>Atendimento para a sua empresa, conforme necessidade.</li>
	 					<li>Soluções especializadas e desenvolvidas de acordo com processos característicos de cada segmento</li>
	 				</ul>

	 				<p><strong>Linhas de Produtos:</strong></p>             
	 				<ul class="topicos">                                                                         
	 					<li><strong>Protheus®</strong></li>
	 					<li><strong>Datasul® /Progress</strong></li>
	 					<li><strong>RM®</strong></li>
	 					<li><strong>Desenvolvimento de projetos ADVPL /MVC PROGRESS</strong></li>
	 					<li><strong>Projetos personalizados</strong></li>                
	 				</ul>
	 				<p><strong>Revitalização:</strong> você já tem a solução TOTVS® implantada e precisa otimizar processos, melhorar o uso, ter seu time capacitado para explorar todas as melhores práticas.</p> 
	 				<p>Nosso time fará um diagnóstico, avalia e ajudará a sua empresa na melhoria e/ou implementação dos melhores recursos do sistema TOTVS®.</p>                                                                                                   

	 				<p><strong>Fale com nosso time especialista para as soluções ADVOL/ MVC e Progress.</strong></p> 


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