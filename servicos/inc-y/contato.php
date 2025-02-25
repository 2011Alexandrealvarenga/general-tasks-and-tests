<div class="formulario">
	<h2><a href="<?=$nomePagina?>" rel="bookmark" title="<?=$h1?>"><i class="fas fa-id-card-alt"></i> Entre em Contato e saiba mais sobre <?=$h1?></a></h2>
	<form class="formulario" method="POST">
		<?php require_once 'inc-y/contato-telefone-email-envio.php';?>

		<div class="box-campos-formulario">
			<input placeholder="Nome" id="nome_formulario" name="nome" type="text" value="<?php echo isset($nome) && !empty($nome) ? $nome : '';?>" />
			<div class="clear"></div>
		</div>
		<div class="box-campos-formulario">
			<input id="telefone_formulario" class="telefone-formulario tratar-telefone" placeholder="(__) ____ ____" name="telefone_form" type="text" maxlength="15" value="<?php echo isset($telefone_form) && !empty($telefone_form) ? $telefone_form : '';?>" />
			<div class="clear"></div>
		</div>
		<div class="box-campos-formulario">
			<input id="email_formulario" placeholder="Email" name="email_form" type="text" value="<?php echo isset($email_form) && !empty($email_form) ? $email_form : '';?>" />
			<div class="clear"></div>
		</div>

		<div class="box-campos-formulario">
			<textarea id="mensagem_formulario" placeholder="Mensagem" name="mensagem" cols="37" rows="10"><?php echo isset($mensagem) && !empty($mensagem) ? $mensagem : '';?></textarea>
			<div class="clear"></div>
		</div>

		<div class="box-campos-formulario">
			<div class="g-recaptcha" data-sitekey="6Lfl7jcmAAAAABeSxJlcr4b2dnj2YtS5Ac1closI"></div>
		</div>

		<div class="box-campos-formulario align-right">
			<div class="box-btn-enviar-dados-formulario">
				<input type="submit" name="submit" class="btn-enviar-dados-formulario" value="ENVIAR">
			</div>
		</div>
</form>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

