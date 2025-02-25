<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o nome foi enviado
    if (isset($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']); // Previne XSS
        echo "O nome enviado é: " . $name;
    } else {
        echo "Nome não enviado.";
    }
}
?>
