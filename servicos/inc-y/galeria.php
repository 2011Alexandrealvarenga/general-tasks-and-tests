<?
function galeria($maximoImagensPorPaginas=20)
{
	global $url;
	global $pastaImagens;
	global $pastaImagensThumbs;
	global $nomePagina;
	global $urlGaleria;
	global $h1;
	global $exibirGaleriaTextoImagemIlustrativa;
	global $pastaImagensYaslip;
	global $descricaoImagemIlustrativa;
	$retornoGaleria="";
	$descricaoImagemGaleria = '';
	$retornoImagemThumbEGrandeGaleriaArr=array();

	global $detect;

	if($detect->isMobile()){
		$maximoImagensPorPaginas = 1;
	}

	if($maximoImagensPorPaginas>=1){
		$count=0;
		for($i=1; $i<=$maximoImagensPorPaginas; $i++){
			$contador=$i<=9?"0".$i:$i;

			if ($urlGaleria == '_exemplo') {
				if ($maximoImagensPorPaginas == 20) {
					$maximoImagensPorPaginas = 1;
				}
				$imagemThumb = $pastaImagens.'nao-disponivel.jpg';
				$imagemGrande = $pastaImagens.'nao-disponivel-grande.jpg';
			} else {
				$imagemThumb=$pastaImagensThumbs.$urlGaleria."-".$contador.".jpg";
				$imagemGrande=$pastaImagens.$urlGaleria."-".$contador.".jpg";
			}

			if(file_exists($imagemThumb) || file_exists($imagemGrande)){
				$count+=1;
				$tituloImagem=$h1." - ".$count;
				$imagemGaleriaG="";
				$imagemGaleriaP="";
				if(file_exists($imagemThumb) && file_exists($imagemGrande)){
					$imagemGaleriaG=$url.$imagemGrande;
					$imagemGaleriaP=$url.$imagemThumb;

				}else if(file_exists($imagemGrande)){
					$imagemGaleriaG=$url.$imagemGrande;
					$imagemGaleriaP=$url.$imagemGrande;
				}else if(file_exists($imagemThumb)){
					$imagemGaleriaG=$url.$imagemThumb;
					$imagemGaleriaP=$url.$imagemThumb;
				}
				if(isset($imagemGaleriaG) && isset($imagemGaleriaP) && $imagemGaleriaG!="" && $imagemGaleriaP!=""){
					$retornoImagemThumbEGrandeGaleriaArr[$i][0]="
					<div class=\"imagem\">
						<a href=\"".$imagemGaleriaG."\" title=\"".$tituloImagem."\">
							<img src=\"".$imagemGaleriaP."\" alt=\"".$tituloImagem."\" title=\"".$tituloImagem."\" />
						</a>
					</div>";
					$retornoImagemThumbEGrandeGaleriaArr[$i][1]="
					<div class=\"imagem\">
						<a href=\"".$imagemGaleriaG."\" title=\"".$tituloImagem."\">
							<img src=\"".$imagemGaleriaG."\" alt=\"".$tituloImagem."\" title=\"".$tituloImagem."\" />
						</a>
					</div>";
				}
			}
		}
	}

	if(isset($retornoImagemThumbEGrandeGaleriaArr) && count($retornoImagemThumbEGrandeGaleriaArr)){
		$classGaleria=count($retornoImagemThumbEGrandeGaleriaArr)>1?"imagens-box":"imagem-box";
		$retornoFinalGaleria="";
		if(count($retornoImagemThumbEGrandeGaleriaArr)<=1){
			if($exibirGaleriaTextoImagemIlustrativa == true ){
				$descricaoImagemGaleria='<div class="descricao-imagem">'.$descricaoImagemIlustrativa.'</div>';
			}
			$ind=1;
		}else{
			$ind=0;
		}

		$retornoFinalGaleria.="<div class=\"imagens-palavras-chave\">";
		foreach($retornoImagemThumbEGrandeGaleriaArr as $retornoImagemThumbEGrandeGaleriaArrItem){
			$retornoFinalGaleria.="<div class=\"$classGaleria\">".$retornoImagemThumbEGrandeGaleriaArrItem[$ind].$descricaoImagemGaleria."</div>";
		}
		$retornoFinalGaleria.="</div>";

		echo $retornoFinalGaleria;
	}


} ?>