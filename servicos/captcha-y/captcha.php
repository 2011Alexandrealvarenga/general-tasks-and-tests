<?php
	session_start();
	$page=isset($_GET["page"]) && !empty($_GET["page"])?$_GET["page"]:'padrao';
	$modelo=isset($_GET["modelo"]) && !empty($_GET["modelo"]) && is_numeric($_GET["modelo"])?$_GET["modelo"]:1;
	if($modelo==1)
	{
		$codigoCaptcha = substr(md5( time()) ,0,5);
		$_SESSION['captcha'][$page]= $codigoCaptcha;
	}
	else if($modelo==2)
	{
		$valor1=rand(1,9);
		$valor2=rand(1,9);
		$resultado=$valor1+$valor2;
		$codigoCaptcha = $valor1.' + '.$valor2;
		$_SESSION['captcha'][$page]= $resultado;
	}
	else
	{
		$codigoCaptcha = substr(md5( time()) ,0,5);
		$_SESSION['captcha'][$page]= $codigoCaptcha;
	}
	$imagemCaptcha = imagecreatefrompng("fundocaptch.png");
	$fonteCaptcha = imageloadfont("anonymous.gdf");
	$corCaptcha = imagecolorallocate($imagemCaptcha,255,0,0);
	imagestring($imagemCaptcha,$fonteCaptcha,15,5,$codigoCaptcha,$corCaptcha);
	header("Content-type: image/png");
	imagepng($imagemCaptcha);
	imagedestroy($imagemCaptcha);
?>