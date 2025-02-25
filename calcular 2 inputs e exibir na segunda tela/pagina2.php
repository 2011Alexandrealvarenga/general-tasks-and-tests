<?php
// página2.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o resultado foi enviado
    if (isset($_POST['resultado'])) {
        $resultado = $_POST['resultado'];
        echo "<h1>Resultado recebido na segunda página</h1>";
        echo "<p>O resultado da soma é: $resultado</p>";
    }
} else {
    echo "<p>Nenhum dado recebido.</p>";
}
?>
