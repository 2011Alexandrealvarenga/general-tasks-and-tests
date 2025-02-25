<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com Input Name</title>
</head>
<body>

    <h2>Formulário para Inserir Nome</h2>
    
    <!-- Formulário -->
    <form action="processar.php" method="POST">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
