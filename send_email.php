<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name == "" || $email == "" || $message == "") {
        echo "Por favor, preencha todos os campos.";
    } else {
        $to = "fabiodljunior@gmail.com";
        $subject = "Nova mensagem de $name";
        $body = "Nome: $name\nEmail: $email\n\nMensagem:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Mensagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar a mensagem. Por favor, tente novamente.";
        }
    }
}
?>