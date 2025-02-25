<?
$h1           = 'Mapa do site';
$description  = 'Atalhos para todas as páginas deste site...';
$key          = 'Atalhos para as páginas do site, Mapa do site';
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
                    <ul class="lista-mapa-site">
                        <?php $mapasite=true; include 'inc-y/menu-principal.php'; ?>
                    </ul>
                    <br /> <br />
                    <p>Voltar para a <a rel="nofollow" href="<?=$url?>" title="Voltar para página inicial">página inicial</a></p>
                </article>
            </div>
        </div>
    </main>
    <?php include 'inc-y/rodape.php'; ?>
</body>
</html>