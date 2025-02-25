<?
	if(isset($menu)){
?>
<?php if ($exibirBarraLateral == true) { ?>
<aside class="barra-lateral">
	<div class="barra-lateral-box">
		<div class="barra-lateral-conteudo">
			<h5><a href="<?=$url.$urlAtividadesEmpresa?>" title="<?=$AtividadesEmpresa?>"><?=$AtividadesEmpresa?></a></h5>
			<ul>
				<?php echo retornaMenu("menuLateral"); ?>
			</ul>
		</div>
	</div>
</aside>
<?php } ?>
<?
	}
?>	