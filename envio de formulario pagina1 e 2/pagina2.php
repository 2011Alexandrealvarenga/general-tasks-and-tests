<?php
// pagina2.php

// Verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando o nome enviado pelo formulário
    $nome = htmlspecialchars($_POST['nome']);
} else {
    // Caso o formulário não tenha sido enviado
    $nome = "Visitante";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
    <script>
        setTimeout(function() {
            window.location.href = 'pagina1.php';
        }, 10000); 
    </script>
</head>
<body>

<h2>Obrigado, <?php echo $nome; ?>!</h2>
<p>Agradecemos pelo envio do seu formulário. Você será redirecionado para a Página 1 em 10 segundos...</p>

</body>
</html>
