<?
$h1           = 'Informações';
$description  = '';
$key          = '';
include('inc-y/head.php');
?>
</head>
<body>
	<?php include 'inc-y/topo.php'; ?>
	<main>
		<div class="base">
			<div class="conteudo-box">
				<article class="conteudo">
					<?=breadcrumb()?>
					<h1><a href="<?=$nomePagina?>" rel="bookmark" title="<?=$h1?>"><?=$h1?></a></h1>
					<?
					if(isset($menu))
					{
					?>
						<div class="galeria-imagens">
							<?
							$getSegmento=isset($_GET["segmento"]) && $_GET["segmento"]!=""?urldecode($_GET["segmento"]):'';
							echo retornaMenu("paginaGeral");
							?>
							<div class="clear"></div>
						</div>
					<?
					}
					?>
				</article>
				<?php if ($exibirBarraLateralInformacoes) {
					include 'inc-y/menu-lateral.php';
				} ?>
			</div>
		</div>
	</main>
	<?php include 'inc-y/rodape.php'; ?>
</body>
</html>