<?php
session_start();
if(isset($_SESSION["persissoesFormulario"])){
	unset($_SESSION["persissoesFormulario"]);
}
include 'inc-y/configuracoes-gerais.php';
require_once("phpmailer-y/PHPMailerAutoload.php");

if ($exibirLinksEImagensDeExemplo) {
	if(!isset($menu) || (count($menu)<=1 && (isset($menu['_exemplo.php']) || isset($menu['_exemplo']))))
	{
		$seguementoMenu=array("Segmento 1"=>array(),"Segmento 2"=>array());
		$menu=array("_exemplo.php" => "Exemplo","links-patrocinados.php" => "Links Patrocinados", "seo.php" => "SEO", "email-marketing.php" => "Email Marketing", "redes-sociais.php" => "Redes Sociais", "classificados.php" => "Classificados", "criacao-sites.php" => "Criação de Sites", "otimizacao-sites.php" => "Otimização de Sites", "busca-organica.php" => "Busca Orgânica", "divulgacao.php" => "Divulgação", "padroes-w3c.php" => "Padrões W3C", "yaslip-marketing-busca.php" => "Yaslip Marketing de Busca");
		$menu=acasesort($menu);
		$totalSegmentoMenuExemplo=count($seguementoMenu);
		$totalMenuExemplo=count($menu);
		#se tiver conteudo nas variaveis menu e segmentoMenu
		if($totalMenuExemplo>0 && $totalSegmentoMenuExemplo>0 && $totalMenuExemplo>$totalSegmentoMenuExemplo)
		{
			$sobraExemploMenuPorSegmentoMenu=$totalMenuExemplo%$totalSegmentoMenuExemplo;
			$totalExemploMenuPorSegmentoMenu=($totalMenuExemplo-$sobraExemploMenuPorSegmentoMenu)/$totalSegmentoMenuExemplo;
			$segmentoAtualMontarSegmentoExemplo=0;
			foreach($seguementoMenu as $segmentoExemplo=>$segmentoExemplo)
			{
				++$segmentoAtualMontarSegmentoExemplo;
				$paginasAtualMontarSegmentoExemplo=0;
				#se for o último segmento acrescenta os menus que sobraram
				$acressentarSobra=$segmentoAtualMontarSegmentoExemplo==$totalSegmentoMenuExemplo && isset($sobraExemploMenuPorSegmentoMenu) && $sobraExemploMenuPorSegmentoMenu>0?$sobraExemploMenuPorSegmentoMenu:0;
				foreach($menu as $linkExemplo=>$pageExemplo)
				{
					++$paginasAtualMontarSegmentoExemplo;
					if($paginasAtualMontarSegmentoExemplo>($segmentoAtualMontarSegmentoExemplo*$totalExemploMenuPorSegmentoMenu)+$acressentarSobra)
					{
						#passa para o próximo segmento
						continue 2;
					}
					else if($paginasAtualMontarSegmentoExemplo>(($segmentoAtualMontarSegmentoExemplo-1)*$totalExemploMenuPorSegmentoMenu))
					{
						#acrescenta o menu ao segmento
						array_push($seguementoMenu[$segmentoExemplo],$linkExemplo);
					}
				}
			}
		}
	}
}
/*--------------------------------------------------------------
- Definir Cookie com URL da página para usar no erro.php
--------------------------------------------------------------*/
setcookie("ultima_pagina", $url.$nomePagina, time()+3600);  /* expira em 1 hora */
/*----------------------------------------------------------
- Chama função para montar Key
-----------------------------------------------------------*/
if(isset($h1) && $h1!=""){
	// $montagemKey=!in_array($nomePagina,$paginasNaoAplicar)?montarKey($h1,$adicionarNoFinalDasKeysH1,$naoMontarKeysComEssasPalavras,$adicionarEssasKeysEmTodasAsPaginas):'';
	$keyMontar = array();
	array_push($keyMontar, $h1);
	if (isset($key) && !empty($key)) {
		array_push($keyMontar, $key);
	}
	if (isset($montagemKey) && !empty($montagemKey)) {
		array_push($keyMontar, $montagemKey);
	}
	$key = implode($keyMontar,', ');
}
/*----------------------------------------------------------
- Habilita a detecção de mobile (http://mobiledetect.net/)
-----------------------------------------------------------*/
include('inc-y/mobile_detect.php');
$detect = new Mobile_Detect;
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta name="viewport" content="initial-scale=1" />
	<meta charset="UTF-8" />
	<?php
	if($exibirCreditosNaHead) {
		echo "
		<!--
		Site desenvolvido por $textoCreditos
		$urlCreditos
		Cliente: $nomeSite
	-->";
}
?>
<title><?=$h1?> - <?=$nomeSite?></title>
<link rel="canonical" href="<?=$urlCanonical?>" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<meta name="robots" content="index,follow" />
<meta name="description" content="<?=$h1.". ".$description?>" />
<meta name="keywords" content="<?=$key?>" />
<meta name="facebook-domain-verification" content="qgkdf9my4jl5xzxmoqt4i4bosy4u28" />
<?php echo $geolocation; ?>
<meta name="classification" content="<?=$classificacao?>" />
<meta property="publisher" content="<?=$textoCreditos?>" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="pt_BR" />
<meta property="og:region" content="Brasil" />
<meta property="og:title" content="<?=$h1?> - <?=$nomeSite?>" />
<meta property="og:author" content="<?=$nomeSite?>" />
<meta property="og:url" content="<?=$urlCanonical;?>" />
<meta property="og:description" content="<?=$description;?>" />
<meta property="og:site_name" content="<?=$nomeSite?>" />
<?php if ( $IDFacebook != '' ) { ?>
<meta property="fb:admins" content="<?$IDFacebook?>" />
<?php }	?>
<?php
	/*--------------------------------------------------------------
	- Meta tag que exibe miniaturas do lado dos resultados de busca
	--------------------------------------------------------------*/
	if ($nomePagina == 'index.php' || $nomePagina == 'index' || $nomePagina == 'informacoes.php' || $nomePagina == 'informacoes' || $nomePagina == 'servicos.php' || $nomePagina == 'servicos' || $nomePagina == 'contato-telefone-email.php' || $nomePagina == 'contato-telefone-email') {
		if (file_exists($imagensPadrao.'logo.jpg')) { ?>
		<meta name="thumbnail" content="<?php echo $url.$imagensPadrao.'logo.jpg' ?>" />
		<meta property="og:image" content="<?php echo $url.$imagensPadrao.'logo.jpg' ?>" />
		<?php } elseif (file_exists($imagensPadrao.'logo.png')) { ?>
		<meta name="thumbnail" content="<?php echo $url.$imagensPadrao.'logo.png' ?>" />
		<meta property="og:image" content="<?php echo $url.$imagensPadrao.'logo.png' ?>" />
		<?php }
	} else {
		if (file_exists($pastaImagensThumbs.$urlGaleria.'-01.jpg')) { ?>
		<meta name="thumbnail" content="<?php echo $url.$pastaImagensThumbs.$urlGaleria.'-01.jpg' ?>" />
		<meta property="og:image" content="<?php echo $url.$pastaImagensThumbs.$urlGaleria.'-01.jpg' ?>" />
		<?php } elseif (file_exists($pastaImagensThumbs.$urlGaleria.'-01.png')) { ?>
		<meta name="thumbnail" content="<?php echo $url.$pastaImagensThumbs.$urlGaleria.'-01.png' ?>" />
		<meta property="og:image" content="<?php echo $url.$pastaImagensThumbs.$urlGaleria.'-01.png' ?>" />
		<?php }
	}
	?>
	<?php
	/*--------------------------------------------------------------
	- Folhas de Estilo
	--------------------------------------------------------------*/
	?>
	<style type="text/css">
		<?php
		if($exibirPreenchimentoObrigatorio) {
			$cssValidacaoPreenchimento = "_temporario/yaslip.css";
		} else {
			$cssValidacaoPreenchimento = '';
		}
		$pastaCSS = 'css-y/';
		$arquivosCSS = array(
			// Insira os Arquivos CSS abaixo (um por linha)
		                     $pastaCSS.'style.css',
		                     $pastaCSS.'magnific-popup.css',
		                     $pastaCSS.'slick-theme.css',
		                     $pastaCSS.'slick.css',
		                     $pastaCSS.'normalize.css',
			$cssValidacaoPreenchimento // Arquivo Temporario de verificação de campos
			);
		for ($i=0; $i < count($arquivosCSS); $i++) {
			echo arquivos_inline($arquivosCSS[$i]);
		}
		?>
	</style>
	<?php
	/*--------------------------------------------------------------
	- Outros Arquivos / Configurações
	--------------------------------------------------------------*/
	?>
	<link rel="shortcut icon" href="<?=$url?>imagens-y/favicon.ico" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W3RX6BC');</script>
<!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '830463681239643');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=830463681239643&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

 <style>.cookieConsentContainer{z-index:999;width:350px;min-height:20px;box-sizing:border-box;padding:30px 30px 30px 30px;background:#232323;overflow:hidden;position:fixed;bottom:30px;right:30px;display:none}.cookieConsentContainer .cookieTitle a{font-family:OpenSans,arial,sans-serif;color:#fff;font-size:22px;line-height:20px;display:block}.cookieConsentContainer .cookieDesc p{margin:0;padding:0;font-family:OpenSans,arial,sans-serif;color:#fff;font-size:13px;line-height:20px;display:block;margin-top:10px}.cookieConsentContainer .cookieDesc a{font-family:OpenSans,arial,sans-serif;color:#fff;text-decoration:underline}.cookieConsentContainer .cookieButton a{display:inline-block;font-family:OpenSans,arial,sans-serif;color:#fff;font-size:14px;font-weight:700;margin-top:14px;background:#000;box-sizing:border-box;padding:15px 24px;text-align:center;transition:background .3s}.cookieConsentContainer .cookieButton a:hover{cursor:pointer;background:#3e9b67}@media (max-width:980px){.cookieConsentContainer{bottom:0!important;left:0!important;width:100%!important}}</style>