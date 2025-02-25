<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>pagina 1</p>
  <form id="formulario" action="pagina2.php" method="POST">
    <input type="text" name="nome" id="nome" placeholder="Nome" required><br>
    <input type="email" name="email" id="email" placeholder="Email" required><br>
    <input type="submit" value="Enviar">
</form>

<script>
// Verificar se os campos obrigatórios foram preenchidos antes de enviar o formulário
document.getElementById("formulario").onsubmit = function(event) {
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;

    if (!nome || !email) {
        alert("Por favor, preencha todos os campos obrigatórios.");
        event.preventDefault();  // Impede o envio do formulário
    }
};
</script>
<!-- <script>alert('testando');</script> -->
</body>
</html>