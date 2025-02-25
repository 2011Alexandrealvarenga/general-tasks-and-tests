<?php
// pagina2.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o reCAPTCHA foi marcado
    $recaptchaSecretKey = "6Lf4WS8pAAAAAJt92Ez_nvEkJXv7Por8JPwABkJh";  // Substitua com a sua chave secreta
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Verifique se o reCAPTCHA foi marcado
    if (empty($recaptchaResponse)) {
        echo "Você deve marcar o reCAPTCHA.";
    } else {
        // Verifique a resposta com o Google reCAPTCHA
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse");
        $responseKeys = json_decode($response, true);

        // Verifique se a validação foi bem-sucedida
        if(intval($responseKeys["success"]) !== 1) {
            echo "Falha na validação do reCAPTCHA. Tente novamente.";
        } else {
            // Validação bem-sucedida, prosseguir com o formulário
            $nome = htmlspecialchars($_POST['nome']);
            echo "Formulário enviado com sucesso! Nome: " . $nome;
        }
    }
}
?>
