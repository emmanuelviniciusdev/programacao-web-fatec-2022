<?php

function wrapContentIntoParagraph($content) {
    return "<p>$content</p>";
}

$user = $_POST['user'];
$password = $_POST['password'];

$credentialsAreEmpty = empty($user) || empty($password);

if ($credentialsAreEmpty) {
    echo wrapContentIntoParagraph("Por favor, especifique as credenciais.");
    exit;
}

echo wrapContentIntoParagraph("Usuário: $user");
echo wrapContentIntoParagraph("Senha: $password");
