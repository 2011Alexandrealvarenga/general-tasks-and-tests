<?
$h1           = 'Emponderamento Feminino WEPs, ONU Mulheres e o Pacto Global'; // Título principal
$description  = 'A Óperah Soluções Empresariais e Tecnologia, assina sua adesão aos Princípios de Empoderamento das Mulheres (Women´s Empowerment Principles - WEPs, em inglês), uma iniciativa da ONU Mulheres e do Pacto Global das Nações Unidas.'; // Descrição do serviço/ Palavra
$key          = ''; // Palavras chave relacionadas
$link = 'https://www.linkedin.com/company/ópera-soluções-empresariais/';
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
	 				<p>A Óperah Soluções Empresariais e Tecnologia, assina sua adesão aos Princípios de Empoderamento das Mulheres (Women´s Empowerment Principles - WEPs, em inglês), uma iniciativa da ONU Mulheres e do Pacto Global das Nações Unidas.</p>
	 				<p>Aderimos aos compromissos, pois, acreditamos que times diversos, geram mais inovação e sustentabilidade onde a empresa faz negócios, reforça o empoderamento das mulheres na empresa, em toda a cadeia de valor e na sociedade.</p>
	 				<p>Ao tornar-se signatária dos sete princípios empresariais que buscam empoderar e delegar poder às mulheres no ambiente de trabalho e na sociedade, a empresa reforça o seu comprometimento com a promoção da equidade de gênero e da diversidade.</p> 

	 				<h2>Conheça os princípios do Emponderamento Feminino WEPs, ONU Mulheres e o Pacto Global</h2>
	 				<ul>
	 					<li>Estabelecer liderança corporativa sensível à igualdade de gênero, no mais alto nível.</li>
	 					<li>Tratar todas as mulheres e homens de forma justa no trabalho, respeitando e apoiando os direitos humanos e a não-discriminação. </li>
	 					<li>Garantir a saúde, segurança e bem-estar de todas as mulheres e homens que trabalham na empresa. </li>
	 					<li>Promover educação, capacitação e desenvolvimento profissional para as mulheres. </li>
	 					<li>Apoiar empreendedorismo de mulheres e promover políticas de empoderamento das mulheres através das cadeias de suprimentos e marketing.</li>
	 					<li>Promover a igualdade de gênero através de iniciativas voltadas à comunidade e ao ativismo social. </li>
	 					<li>Medir, documentar e publicar os progressos da empresa na promoção da igualdade de gênero.</li>
	 				</ul>

	 				<p>Estamos muito felizes e orgulhosos!</p>
	 				<p>Contamos com o seu comprometimento, para cada vez mais, atingirmos as melhores ações.</p>


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