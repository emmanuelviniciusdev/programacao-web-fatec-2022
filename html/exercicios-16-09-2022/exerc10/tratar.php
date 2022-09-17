<?php


$email = $_POST['email'];

$credenciaisVazias = empty($email);

if ($credenciaisVazias) {
    echo "Por favor, especifique as credenciais.";
    exit;
}

$emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);

if ($emailValido) {
    echo "seu e-mail foi cadastrado com sucesso";
} else {
    echo "e-mail inválido";
}
?>
