<!-- pagina1.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário com reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <h2>Preencha o formulário</h2>
    <form action="pagina2.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <!-- reCAPTCHA -->
        <div class="g-recaptcha" data-sitekey="6Lf4WS8pAAAAAJt92Ez_nvEkJXv7Por8JPwABkJh"></div><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
