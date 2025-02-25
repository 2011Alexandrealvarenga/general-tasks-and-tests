<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consys_db";

// Crie a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifique se o parâmetro 'id' foi passado
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query para pegar os detalhes do item
    $sql = "SELECT modelo, marca FROM carro WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibe os detalhes do item
        $row = $result->fetch_assoc();
        echo "<h1>Detalhes do Item</h1>";
        echo "<p><strong>Modelo:</strong> " . $row['modelo'] . "</p>";
        echo "<p><strong>Marca:</strong> " . $row['marca'] . "</p>";
    } else {
        echo "Item não encontrado.";
    }
} else {
    echo "ID não fornecido.";
}

$conn->close();
?>
