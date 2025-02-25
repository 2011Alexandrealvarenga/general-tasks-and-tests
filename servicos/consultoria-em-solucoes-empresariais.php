<?
$h1           = 'Consultoria em soluções empresariais'; // Título principal
$description  = 'O nosso objetivo como consultoria em soluções empresariais, é levar cultura digital, inovação e transformação digital à sua empresa.'; // Descrição do serviço/ Palavra
$key          = 'Empresa especializada em soluções, Empresa especializada em TOTVS®, Empresa TOTVS®, especialização em serviços TOTVS®'; // Palavras chave relacionadas
$link = 'https://www.operah.com.br/';
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
	 				<p>O nosso objetivo como consultoria em soluções empresariais, é levar cultura digital, inovação e transformação digital à sua empresa, aplicando as melhores soluções para o seu ambiente. </p>                                                                                

	 				<p><strong>FOCO: redução de custos, performance e inovação para as suas atividades.</strong></p>                                                      

	 				<p><strong>O que oferecemos:</strong>   A Óperah Soluções, atua com a as melhores soluções de mercados.</p>   
	 				<p>Somos uma empresa que ajuda a sua companhia na implantação de tecnologia.</p> 

	 				<h2>SERVIÇOS TOTVS®</h2>
	 				<ul class="topicos">
	 					<li><strong>serviços TOTVS®:</strong> Atendimento para a sua empresa, conforme necessidade, Suporte, Implantação, Capacitação, Desenvolvimento de programas em ADVPL, melhorias de processos.</li>
	 				</ul>     
	 				<p>Atuamos com as soluções especializadas e desenvolvidas de acordo com processos característicos de cada segmento.</p>

	 				<ul class="topicos">
	 					<li><strong>Produtos:</strong></li>	
	 					<ul class="topicos">                                                                                    
	 						<li><strong>Protheus® </strong></li>
	 						<li><strong>Datasul®/ Progress</strong></li>
	 						<li><strong>RM®</strong></li>
	 						<li><strong>Desenvolvimento de projetos ADVPL</strong></li>
	 						<li><strong>Projetos Personalizados   </strong></li>
	 					</ul>
	 				</ul> 
	 				
	 				<p><strong>Revitalização:</strong> você já tem a solução TOTVS® implantada e precisa otimizar processos, melhorar o uso, ter seu time capacitado para explorar todas as melhores práticas.</p> 
	 				<p>Nosso time fará um diagnóstico, avalia e ajudará a sua empresa na melhoria e/ou implementação dos melhores recursos do sistema TOTVS®.</p>                                                                   

	 				<ul class="topicos">
	 					<li><strong>SEGURANÇA DA INFORMAÇÃO:</strong> Soluções contra invasores: firewall e wifi.</li>
	 				</ul>
	 				<p>Embora a maioria dos funcionários não esteja tentando comprometer a segurança, você deve considerar o que pode, razoavelmente, esperar deles, devido à proliferação de contas online que exigem senhas.</p>
	 				<p>Estudos mostram que, geralmente, 3-6% dos funcionários, 2/3 usam senhas fracas e até as compartilham entre contas.</p>
	 				<p>Esses tipos de práticas inseguras de senhas, resultam em vazamentos, que são exploradas em 81% dos ataques cibernéticos em todo o mundo e 61% de todos os ataques, visam empresas com menos de 1.000 funcionários. Portanto, você não pode mais confiar apenas em uma senha!</p>

	 				<h2>Proteja sua empresa contra invasores e deixe seu negócio mais seguro com a Empresa especializada em soluções INOVADORAS!</h2>

	 				<ul class="topicos">
	 					<li><strong>SOLUÇÕES AUDIOVISUAIS CORPORATIVAS</strong></li>
	 				</ul>
	 				<p>Deseja ter o melhor em audiovisual com quem conhece e ainda, ter seu projeto com Direção Artística?</p>  
	 				<p>Desenvolvemos Web séries, Filmes Institucionais, Projetos Personalizados para o seu negócio com profissionalismo e qualidade!</p> 
	 				<p>Profissionais altamente qualificados, com mais de 20 anos de experiência em TV, Netflix, HBO, diversos prêmios de reconhecimentos. Invista seu dinheiro com quem sabe e entende de obras audiovisuais.</p>  

	 				<p>O ROI é imensurável!!</p>                                                                                    

	 				<ul class="topicos"><li><strong>TELECOM E CONTAS DE CONSUMO</strong></li></ul>
	 				<p>Gestão de contas e redução de custos.</p> 
	 				<p>A sua empresa precisa de performance e você de controle mais assíduo sobre suas contas de consumo, reduzindo custos constantemente. </p>
	 				<p>Nós da Óperah Soluções, podemos ajudá-los no controle de gastos e ainda mais, fazer a gestão das suas contas de energia elétrica, telefonia e outros.</p> 
	 				<p>Somos uma empresa com homologação do CONTEL - Conselho Nacional de Telecomunicações, que visa o direito da empresa e a boa conduta das operadoras.</p> 
	 				<p>Atuamos com um time de mais de 20 anos de experiência, levando uma gestão eficiente dos gastos.</p>                                                                                   

	 				<ul class="topicos"><li><strong>BANCO DE DADOS</strong></li></ul> 
	 				<p>SQL,dB2,Oracle</p>
	 				<p>Sua empresa já esteve em momentos muito crítico, com problemas de banco de dados? </p>
	 				<p>Fale com a Óperah Soluções! Temos especialistas para soluções e necessidades para a sua empresa.</p>                                                                                     

	 				<ul class="topicos"><li><strong>PROJETOS PERSONALIZADOS</strong></li></ul>
	 				<p>Web, desenvolvimento de sites, Desenvolvimento de Aplicativos, ERP sob medida para o seu negócio.</p>                                                              
	 				<p>Você tem um problema e nós temos a solução! Traga o seu escopo ou necessidade, que juntos, podemos adequar e inovar a melhor solução empresarial para o seu negócio digital.</p>                               

	 				<ul class="topicos"><li>DIGITAL MARKETING</li></ul>
	 				<p>Soluções em digital marketing para a sua empresa.</p>


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