<?
$h1           = 'Serviços especializados em segurança da informação para LGPD | Lei Geral de Proteção de Dados.'; // Título principal
$description  = 'Procurando por uma empresa especialiazada em Serviços especializados em segurança da informação para LGPD ? Entre em confira.'; // Descrição do serviço/ Palavra
$key          = ''; // Palavras chave relacionadas
$link = 'https://operah.com.br/solucoes/?cat=11&link=seguranca-informacao';
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
	 				<p>Com a chegada no Brasil da LGPD (Lei Geral de Proteção de Dados), os dados dos funcionários de sua empresa, de seus clientes e de toda a cadeia produtiva, são mais importantes e, em caso de vazamento, uma multa é muito maior que o projeto de segurança de um ser implantado.</p>  
	 				<p>Sempre que visitamos uma empresa para conversar sobre a segurança da informação, um problema com o acesso à internet (firewall) e com os endpoints (antivírus), é sempre evidente.</p> 
	 				<p>A utilização de tecnologias de comunicação Wi-Fi, não tem mercado e, teoricamente, com recursos de segurança, faz com que as empresas não se preocupem com essa “porta de acesso” aos hackers.</p> 
	 				<p>Você deve fornecer aos seus clientes e funcionários, um serviço rápido e de alto desempenho.</p> 
	 				<p>Ter uma solução fácil de gerenciar e escalonável, facilita sua vida à medida que sua empresa cresce.</p>  
	 				<p>Mas quando foi a última vez que você pensou em sua segurança?</p>  

	 				<h2>Temos serviços especializados em Segurança da Informação para LGPD | Lei Geral de Proteção de Dados</h2>
	 				<p>Você está protegido contra as 6 (seis) categorias de ameaças Wi-Fi?</p> 
	 				<ul>
	 					<li>1. AP Clandestino (Rogue AP) - permite que invasores, burlem a segurança do perímetro;</li>
	 					<li>2. AP EVIL TWIN - faz com que os usuários se conectem a ele, permite que invasores espionem o tráfego, roubem os dados e infectem o sistema;</li>
	 					<li>3. AP Vizinho - corre risco de ataques ao se conectar a outros SSIDS, enquanto estiver ao alcance do AP autorizado;</li>
	 					<li>4. Cliente Clandestino- entrega cargas de malwares;</li>
	 					<li>5. Rede Ad-Rock - utiliza conexões ponto-a-ponto, para evitar os controles de segurança;</li>
	 					<li>6. AP mal configurado - deixa redes vulneráveis aos ataques, como consequências, erros de configuração.</li>
	 				</ul>
	 				<p>Você pode ser suscetível a todas elas!</p>
	 				<p>Faz sentido a você? </p>
	 				<p>Nós podemos te ajudar! Conte com o time de especialistas da Óperah Soluções!</p>


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