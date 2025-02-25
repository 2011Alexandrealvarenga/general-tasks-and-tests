<?
$h1           = 'Empresa de tecnologia em São Paulo - Brasil'; // Título principal
$description  = 'A Óperah Soluções empresa especialiazda em serviços TOTVS® está presente há quase duas décadas no mercado brasileiro, com mais centenas de projetos entregues.'; // Descrição do serviço/ Palavra
$key          = 'Empresa especializada em soluções, Empresa especializada em TOTVS®, Empresa TOTVS®, especialização em serviços TOTVS®'; // Palavras chave relacionadas
$link = 'https://operah.com.br/';
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
	 				<p>A Óperah Soluções é uma integradora de soluções de tecnologia, há mais de 18 anos. </p>  
	 				<p>O nosso objetivo como empresa de tecnologia, é levar cultura digital, inovação e transformação digital à sua empresa, aplicando as melhores soluções para o seu ambiente.</p>                                                                                    
	 				<p>A Óperah Soluções também conquistou em seus anos de trabalhos, prêmios e certificados, que atestam a qualidade de seus serviços e a ética com que realiza as suas atividades.</p>                                                                                      
	 				<p><strong>Foco:</strong> redução de custos, performance e inovação para as suas atividades.</p>                                                      
	 				<p><strong>O que oferecemos:</strong>   A Óperah Soluções, atua com a as melhores soluções de mercados.    Somos uma empresa que ajuda a sua companhia na implantação de tecnologia.</p> 
	 				<p>Estamos em São Paulo | Brasil e podemos ajudá-los com a inovação do mercado 4.0.</p>                                                                                            

	 				<h2>NEGÓCIOS:</h2>
	 				<p>SERVIÇOS TOTVS®: Atendimento para a sua empresa, conforme necessidade.</p>     
	 				<p>Atuamos com as soluções especializadas e desenvolvidas de acordo com processos característicos de cada segmento</p>
	 				<h3>Linhas de Produtos: </h3>
	 				<ul>                                                                                      
	 					<li>Protheus®</li>
	 					<li>Datasul® /Progress</li>
	 					<li>RM </li>
	 					<li>Desenvolvimento de projetos ADVPL</li>
	 					<li>Projetos personalizados </li>
	 				</ul> 
	 				<h2>Saiba mais sobre Empresa de tecnologia em São Paulo - Brasil </h2>                                                                               
	 				<p>Revitalização: você já tem a solução TOTVS® implantada e precisa otimizar processos, melhorar o uso, ter seu time capacitado para explorar todas as melhores práticas. </p>
	 				<p>Nosso time fará um diagnóstico, avalia e ajudará a sua empresa na melhoria e/ou implementação dos melhores recursos do sistema TOTVS®. </p>        
	 				<ul>                                                        
	 					<li>SEGURANÇA DA INFORMAÇÃO:  Soluções contra invasores: firewall e wifi            </li>
	 					<li>SOLUÇÕES AUDIOVISUAIS CORPORATIVAS                                                                                            </li>
	 					<li>TELECOM E CONTAS DE CONSUMO: Gestão de contas e redução de custos </li>
	 					<li>BANCO DE DADOS: SQL, dB2, Oracle </li>
	 					<li>PROJETOS PERSONALIZADOS: Web, desenvolvimento de sites, Desenvolvimento de Aplicativos, ERP sob medida para o seu negócio </li>
	 					<li>DIGITAL MARKETING: soluções em digital marketing para a sua empresa.</li>
	 				</ul>
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


