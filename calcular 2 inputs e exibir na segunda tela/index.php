<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar Valores</title>
    <script>
        // Função para somar os valores
        function somarValores() {
            var valor1 = parseFloat(document.getElementById('spanValor1').innerText); // Pega o valor do span
            var valor2 = parseFloat(document.getElementById('input2').value); // Pega o valor do input2

            if (isNaN(valor1) || isNaN(valor2)) {
                alert("Por favor, insira valores numéricos válidos.");
                return;
            }

            var resultado = valor1 + valor2;

            // Exibe o resultado na span
            document.getElementById('resultado').innerText = "Resultado: " + resultado;

            // Atualiza o campo oculto com o resultado
            document.getElementById('resultadoForm').value = resultado;
        }
    </script>
</head>
<body>
    <h1>Somar um valor fixo e um valor do input</h1>
    <form action="pagina2.php" method="post">
        <label for="input2">Número 2:</label>
        <input type="number" id="input2" name="input2" required>
        <br>
        <label>Valor 1 (do span):</label>
        <span id="spanValor1">100</span> <!-- Valor fixo no span -->
        <br><br>
        <button type="button" onclick="somarValores()">Somar</button>
        <br><br>
        <!-- Aqui é onde o resultado será exibido -->
        <span id="resultado"></span>

        <!-- Campo oculto para enviar o resultado -->
        <input type="hidden" name="resultado" id="resultadoForm">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
