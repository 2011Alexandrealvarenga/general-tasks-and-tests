<?php if (isset($menu)){ ?>
<?php if ($exibirProdutosRelacionados == true): ?>
	<? if(isset($menu) && count($menu)>1 || ($nomePagina=="_exemplo.php" || $urlGaleria=="_exemplo")){
		?>
		<h5 class="titulo-produtos-relacionados">Outros assuntos relacionados a <?=$h1?></h5>
		<div class="produtos-relacionados">
			<?php
			echo retornaMenu("produtosRelacionados");
			?>
		</div>
		<?php
	}
	?>
<?php endif;
} ?>