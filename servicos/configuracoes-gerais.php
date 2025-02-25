<?
ini_set('display_errors',0);
error_reporting(E_ALL);
// URL Automática
$pastaEPagina = explode("/",$_SERVER['PHP_SELF']);
$pastaDominio = "";
for($i=0; $i < count($pastaEPagina); $i++){
	if(substr_count($pastaEPagina[$i], ".") == 0){
		$pastaDominio .= $pastaEPagina[$i]."/";
	}
}
$url = "https://".$_SERVER['HTTP_HOST'].$pastaDominio;
include('funcoes.php');
if (!isset($h1)) { $h1 = ''; }
if (!isset($description)) { $description = ''; }
if (!isset($key)) { $key = ''; }
/*--------------------------------------------------------------
- Configurações Gerais
--------------------------------------------------------------*/
$exibirPreenchimentoObrigatorio = false;	
$textoCreditos              = 'Operah Soluções';
$urlCreditos                = 'www.operah.com.br';
$nomeSite                   = 'Operah Soluções Empresariais';
$slogan                     = 'Soluções Empresariais';
$classificacao              = '';
$ddd                        = '55 (11)';
$prestadora					= '(021)'; /*----Opcional de quem vai ligar 'Apenas Mobile'----*/
$whatsapp					= ''; /*Deixar em branco caso o cliente não tenha whatsapp*/
$telefone                   = ' 3042-6614';
$telefone2                  = '';
$telefone3                  = '';
$telefone4                  = '';
$email                      = 'admin@example.com';
$rua                        = 'Rua Nome da Rua, #00';
$bairro                     = 'Nome do Bairro';
$cidadeUF                   = 'Cidade / UF';
$cep                        = 'CEP: 00000-000';
$urlGoogleMaps              = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.1402134565146!2d-46.55915256137695!3d-23.455406320216927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef5a6054be029%3A0xcff4ddf94b5edcf3!2sR.+Ant%C3%B4nio+Rab%C3%AAlo%2C+221+-+Jardim+Alianca%2C+Guarulhos+-+SP%2C+07063-080!5e0!3m2!1spt-BR!2sbr!4v1437492558446';
$AtividadesEmpresa          = 'Serviços Relacionados';
$urlAtividadesEmpresa       = 'informacoes.php';
$fraseLinkagemInterna       = 'Veja Também: ';
$saibaMaisLinkPaginaContato = 'contato-telefone-email.php';
$IDFacebook                 = ''; // http://graph.facebook.com/nome_da_pagina


// Utilize o gerador de tags

/*--------------------------------------------------------------
- Utilizar a Latitude e Longitude do endereço do cliente

* http://www.geo-tag.de/generator/en.html *
--------------------------------------------------------------*/
$geolocation = '
<meta name="geo.region" content="BR-SP" />
<meta name="geo.placename" content="Guarulhos" />
<meta name="geo.position" content="-23.456016;-46.558997" />
<meta name="ICBM" content="-23.456016, -46.558997" />
';

/*--------------------------------------------------------------
- Ativar e desativar partes do site
--------------------------------------------------------------*/
// true = sim  /  false = não
// Exibe links e Imagens de exeplo apenas para fins de layout
// Deve ser marcado como false ao finalizar a criação do site
$exibirLinksEImagensDeExemplo = true;
$exibirBarraLateral = true;
$exibirBarraLateralInformacoes = false;
$exibirBarraLateralIndex = false;
$exibirBreadcrumb = true;
$exibirRedesSociaisConteudo = true;
$exibirGaleria = true;
$exibirRegioes = false;
$exibirLinkagemInterna = true;
$exibirProdutosRelacionados = true;
$exibirTags = true;
$exibirMaisVisitados = true;
$exibirTextoDireitosAutorais = true;
$exibirVoltarParaOTopo = true;
$exibirPopupAviso = false;

// Créditos Yaslip
$exibirCreditosNaHead = true;
$exibirSelosYaslip = true;

// Saiba Mais Sobre
$exibirSaibaMaisSobre = true;

// Redes sociais Rodapé
$exibirRedesSociaisRodape = true;
$urlFacebook   = '#'; // Insira a URL ou remova o #
$urlTwitter    = '#';
$urlGooglePlus = '#';
$urlLinkedin   = '#';
$urlYouTube    = '#';
$urlPinterest  = '#';
$urlRSS        = '#';

// Texto imagme Ulustrativa
$exibirGaleriaTextoImagemIlustrativa = true;
$descricaoImagemIlustrativa          = 'Imagem ilustrativa para <strong>'.$h1.'</strong>';
// Direção Sub Menu
$direcaoSubMenu = 'right'; // valores: 'right' ou 'left'
/*--------------------------------------------------------------
- Bibliotecas e Plugins
--------------------------------------------------------------*/
$versaoJQuery = 1; // 0 = Sem jQuery (não recomendado)  |  1 = jquery-1.11.3.min.js  |  2 = jquery-2.1.3.min.js  |  3 = jquery.js (arquivo personalizado do jQuery)
/*--------------------------------------------------------------
- Configurações de Pastas e URLs
--------------------------------------------------------------*/
// Pastas
$imagensPadrao      = 'imagens-y/';
$pastaImagens       = $imagensPadrao.'informacoes/';
$pastaImagensYaslip = $imagensPadrao.'y/';
$pastaImagensThumbs = $pastaImagens.'thumbs/';
$pastaInc           = 'inc-y/';
$pastaJS            = 'js-y/';
$pastaCSS           = 'css-y/';
$pastaCaptcha       = 'captcha-y/';
$pastaFonts         = 'fonts-y/';
$pastaPhpMailer     = 'phpmailer-y/';
$pastaAjax          = 'ajax-y/';
$pastaDocumentos    = '_Documentos/';
$pastaGerador       = '_gerador';
$pastaTemporario    = '_temporario';
// URLs
$nomePagina           = explode("/", $_SERVER['PHP_SELF']); // com .php
$nomePagina           = end($nomePagina);
$urlGaleria           = str_replace( '.php', '', $nomePagina ); // sem .php
// Pega o nome do arquivo/página atual
if ( $nomePagina == 'index.php' || '') {
	$nomePagina = '';
	$urlCanonical = $url;
} else {
	$urlCanonical = $url.$nomePagina;
}

// ---------------------------------------------------
// Configurações do formulário
// ---------------------------------------------------
$titulo_email = 'Contato via site '.$nomeSite;
$nome_pagina_formulario = 'contato-telefone-email';
$redirecionar_pagina_apos_envio = true;
$scroll_top_aviso_erro = true;
$url_parametro_enviado_com_sucesso = '?email-enviado-com-sucesso';
$nome_arquivo_request = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];

// URL para enviar os dados do formulário e reportar erro
$url_yaslipmail = 'http://yaslipmail.com.br/enviar-emails-clientes/recebe-dados-clientes.php';
// $url_yaslipmail = 'http://localhost/sistemas/yaslipmail.com.br/enviar-emails-clientes/recebe-dados-clientes.php';
$formularioHabilitarAnexo = false;
$tempoUsuarioReportarErroDenovo = 600; // em minutos (sem aspas)

$dominio = 'mail.operah.com.br'; //mail.dominio.com.br
$port = 587;
$emailRemetente = 'guilhermecreis09@gmail.com'; //admin@dominio.com.br
$senhaEmail = 'DdOf01366@';//'admin1234';
$emailContato = 'guilhermecreis09@gmail.com'; //contato@dominio.com.br


/*----------------------------------------------------------
- Configuração de palavras para Montar Keys
-----------------------------------------------------------*/
// if(isset($h1) && $h1!=""){
// 	$paginasNaoAplicar=array('mapa-site.php','contato-telefone-email.php','informacoes.php'); /*Páginas para não inserir as keys automáticas*/
// 	/*adiciona no final da key*/
// 	$adicionarNoFinalDasKeysH1=array(); /*exemplo ("Em SP","No Brasil","Preço"...)*/
// 	/*não criar key apartir desta palavra*/
// 	$naoMontarKeysComEssasPalavras=array();
// 	keys serão incluidas em todas as páginas::podem ser separadas por segmento caso selecionado no arquivo de configurações gerais
// 	// Para sites com apenas um segmento
// 	$adicionarEssasKeysEmTodasAsPaginas=""; // Exemplo: Marketing, Busca, Internet
// 	// Para sites com segmentos separados
// 	//$adicionarEssasKeysEmTodasAsPaginas['nome_do_segmento']="Marketing, Busca, Internet";
// 	//$adicionarEssasKeysEmTodasAsPaginas['nome_do_outro_segmento']="SEO, HTML, CSS";

// }
/*--------------------------------------------------------------
- Configurações necessárias (Não remover)
--------------------------------------------------------------*/
$mapasite                       = false;
$menuRodape                     = false;
/*--------------------------------------------------------------
- Palavras Chaves (Utilizar o gerador)
--------------------------------------------------------------*/
$separarSegmentos = false;
$seguementoMenu = array();
$seguementoMenu["Informações"] = array();
$menu["a-melhor-empresa-de-advpl-e-progress.php"]="A melhor empresa de advpl e progress";
$menu["a-melhor-empresa-de-solucoes-audiovisuais-em-sao-paulo.php"]="A melhor empresa de soluções audiovisuais em são paulo";
$menu["consultoria-em-servicos-totvs.php"]="Consultoria em serviços TOTVS®";
$menu["consultoria-em-solucoes-empresariais.php"]="Consultoria em soluções empresariais";
$menu["empresa-com-reconhecimento-sebrae.php"]="Empresa com reconhecimento sebrae";
$menu["empresa-de-tecnologia-em-sao-paulo-brasil.php"]="Empresa de tecnologia em são paulo brasil";
$menu["empresa-especializada-em-erp.php"]="Empresa especializada em erp";
$menu["empresa-especializada-em-servicos-totvs.php"]="Empresa especializada em serviços TOTVS®";
$menu["empresa-especializada-em-solucoes-web-aplicativos.php"]="Empresa especializada em soluções web aplicativos";
$menu["futuro-do-trabalho.php"]="Futuro do trabalho";
$menu["gerenciamento-empresarial-contra-invasores.php"]="Gerenciamento empresarial contra invasores";
$menu["id-card.php"]="Id card";
$menu["lgpd-lei-geral-de-protecao-de-dados.php"]=" LGPD | Lei Geral de Proteção de Dados";
$menu["luciane-abramo.php"]="Luciane abramo";
$menu["servicos-totvs-comex.php"]="Serviços TOTVS® COMEX";
$menu["projetos-em-advpl-mvc-e-progress.php"]="Projetos em advpl mvc e progress";
$menu["servicos-de-comex-empresas.php"]="Serviços de comex empresas";
$menu["servicos-de-integracoes-de-aplicacoes-e-tecnologia.php"]="Serviços de integracoes de aplicações e tecnologia";
$menu["servicos-especializados-em-seguranca-da-informacao-para-lgpd.php"]=" Serviços especializados em segurança da informação para LGPD | Lei Geral de Proteção de Dados";
$menu["solucoes-de-seguranca-da-informacao.php"]="Soluções de segurança da informação";
$menu["emponderamento-feminino-weps-onu-mulheres-e-o-pacto-global.php"]="Emponderamento Feminino WEPs, ONU Mulheres e o Pacto Global";
$menu["responsabilidade-social.php"]="Responsabilidade Social";
$menu["empresa-referercia-nacional.php"]="Empresa Referência Nacional";
$menu["a-melhor-empresa-em-servicos-totvs-comex.php"]="a Melhor Empresa Em Serviços TOTVS® Comex";
array_push($seguementoMenu["Informações"],"a-melhor-empresa-de-advpl-e-progress.php");
array_push($seguementoMenu["Informações"],"a-melhor-empresa-de-solucoes-audiovisuais-em-sao-paulo.php");
array_push($seguementoMenu["Informações"],"consultoria-em-servicos-totvs.php");
array_push($seguementoMenu["Informações"],"consultoria-em-solucoes-empresariais.php");
array_push($seguementoMenu["Informações"],"empresa-com-reconhecimento-sebrae.php");
array_push($seguementoMenu["Informações"],"a-melhor-empresa-em-servicos-totvs-comex.php");
array_push($seguementoMenu["Informações"],"empresa-de-tecnologia-em-sao-paulo-brasil.php");
array_push($seguementoMenu["Informações"],"empresa-especializada-em-erp.php");
array_push($seguementoMenu["Informações"],"empresa-especializada-em-servicos-totvs.php");
array_push($seguementoMenu["Informações"],"empresa-especializada-em-solucoes-web-aplicativos.php");
array_push($seguementoMenu["Informações"],"futuro-do-trabalho.php");
array_push($seguementoMenu["Informações"],"servicos-totvs-comex.php");
array_push($seguementoMenu["Informações"],"gerenciamento-empresarial-contra-invasores.php");
array_push($seguementoMenu["Informações"],"id-card.php");
array_push($seguementoMenu["Informações"],"lgpd-lei-geral-de-protecao-de-dados.php");
array_push($seguementoMenu["Informações"],"luciane-abramo.php");
array_push($seguementoMenu["Informações"],"projetos-em-advpl-mvc-e-progress.php");
array_push($seguementoMenu["Informações"],"servicos-de-comex-empresas.php");
array_push($seguementoMenu["Informações"],"servicos-de-integracoes-de-aplicacoes-e-tecnologia.php");
array_push($seguementoMenu["Informações"],"servicos-especializados-em-seguranca-da-informacao-para-lgpd.php");
array_push($seguementoMenu["Informações"],"solucoes-de-seguranca-da-informacao.php");
array_push($seguementoMenu["Informações"],"emponderamento-feminino-weps-onu-mulheres-e-o-pacto-global.php");
array_push($seguementoMenu["Informações"],"responsabilidade-social.php");
array_push($seguementoMenu["Informações"],"empresa-referercia-nacional.php");
$menu=acasesort($menu);
/*-------------------------------------------------------------------
- verifica o menu e tira as palavras chave
-------------------------------------------------------------------*/
/* Chama a função de verificação */
$arrayMenuStark = $menu;
/* Funcao verifica se as paginas existem */
if(keysExist() == false){
	/* destrói a variavel menu. */
	unset($menu);
}