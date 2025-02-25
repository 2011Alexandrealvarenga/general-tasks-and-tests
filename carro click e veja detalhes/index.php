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

// Query para pegar os itens
$sql = "SELECT id, modelo FROM carro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibe os itens como uma lista
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li><a href='detalhes.php?id=" . $row['id'] . "'>" . $row['modelo'] . "</a></li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum item encontrado.";
}

$conn->close();
?>
