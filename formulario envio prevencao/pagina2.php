<?php
// Verifica se os dados necessários foram enviados via POST
if (
    !isset($_POST['nome']) || 
    !isset($_POST['email'])) {
    // Se não estiverem, redireciona para a Página 1
    $nome = sanitize_text_field($_POST['nome']);
    header('Location: pagina1.php');
    exit;
}
?>

<h1>Bem-vindo à Página 2</h1>
<p>Nome: <?php echo htmlspecialchars($_POST['nome']); ?></p>
<p>Email: <?php echo htmlspecialchars($_POST['email']); ?></p>
