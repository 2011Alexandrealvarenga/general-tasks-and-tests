<?php
if ($exibirPreenchimentoObrigatorio) {
	if (file_exists('_temporario/preenchimento-obrigatorio.php')) {
		include('_temporario/preenchimento-obrigatorio.php');
	}
}
?>
<header>
		<div class="barra-topo">
			<div class="contato-topo">
				<?php if (isset($telefone) && ($telefone != '')) { ?>
					<div class="telefone-topo"><i class="fas fa-phone-volume"></i> <strong><?php echo $ddd.' '.telefone($telefone); ?></strong></div>
				<?php } ?>
			</div>
		</div>
		<div class="topo">
			<div class="logo">
				<a rel="nofollow" href="https://operah.com.br/" title="<?=$nomeSite?>"><img src="<?=$url?>imagens-y/logo.png" alt="<?=$nomeSite?>" title="<?=$nomeSite?>" /></a>
			</div>
			<?php include 'inc-y/menu-principal.php'; ?>
		</div>
		<div class="clear"></div>
</header>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3RX6BC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->