<?
$h1           = 'Gerenciamento empresarial contra invasores'; // Título principal
$description  = 'Segurança da Informação é um tema complexo, todas as empresas, independente de porte precisa de um Gerenciamento empresarial contra invasores.'; // Descrição do serviço/ Palavra
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
	 				<p>Segurança da Informação é um tema complexo e urgente, sendo que todas as empresas, independente de porte e segmento, estão sujeitas a sofrerem ataques cibernéticos. Nesse sentido, a prevenção é mesmo o melhor caminho!</p>                                                                                                                                            
	 				<h2>Conheça o Gerenciamento empresarial contra invasores</h2>                                                                       
	 				<p>A empresa Robert Half, atuante no setor de recolocação profissional, realizou uma pesquisa com 100 CIOs brasileiros e concluiu que os maiores receios desses executivos são: extorsão, fraudes e roubos de dados (73%), espionagem e ransomware (53%) e uso abusivo dos dados empresariais (52%).</p>
	 				<p>Ao serem questionados sobre as ações que pretendem implantar para obter maior proteção contra-ataques virtuais, 74% dos executivos querem introduzir recursos de autenticação e autorização para acesso à rede corporativa, 55% pretendem criar uma política de uso e proteção de informações e 53% se mostraram preocupados em ter proteção para dispositivos móveis.</p>
	 				<p>Prosseguindo com as preocupações relativas à segurança da informação corporativa, 47% dos pesquisados mostraram interesse em treinamento dos colaboradores para utilização correta dos dispositivos pessoais, enquanto 25% afirmaram o desejo de proibir acesso aos dados corporativos através de dispositivos pessoais.</p>
	 				<p>Os gestores que participaram do estudo, demonstraram ter foco, profissionais com conhecimento em prevenção, identificação, controle e proteção de ameaças virtuais. Contudo, tal tarefa não é assim tão fácil, uma vez que 47% dos CIOs manifestaram dificuldade em encontrar candidatos com o perfil desejado e que possam fazer frente aos ataques, em constante evolução.</p>
	 				<p>Para driblar essa constatação, é essencial pensar em treinamentos de colaboradores ou, ainda, a contratação de empresas que possuam soluções e profissionais de ponta, para garantir a segurança da informação.</p>                                                                                                                         

	 				<h3>Cultura Empresarial </h3>                                                                       
	 				<p>É imprescindível que todas os profissionais, tenham consciência dos perigos existentes no mundo virtual e é dever de todos, seguir a política de segurança da informação adotada pela instituição, visando a proteção de dados.</p>                                                                                             
	 				<p>Cabe à organização, criar mecanismos, regras de proteção e se engajarem em seu cumprimento, incluindo parceiros e outras pessoas que, de alguma forma, acessam os dados empresariais.</p>
	 				<p>Empresas que levam a segurança da informação a sério, preservam ataques, prejuízos e passam maior confiança, ajudando na construção de uma imagem positiva e de maior credibilidade.</p>                                             
	 				<p>Conte com o apoio da Óperah Soluções e conheça os nossos serviços!</p> 


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