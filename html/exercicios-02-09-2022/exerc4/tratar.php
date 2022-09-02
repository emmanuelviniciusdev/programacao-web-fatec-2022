<?php

require './segredo.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$credenciaisVazias = empty($login) || empty($senha);

if ($credenciaisVazias) {
    echo "Por favor, especifique as credenciais.";
    exit;
}

$tipoUsuario = NULL;

foreach ($usuario as $u) {
    if ($u['login'] == $login) {
        $tipoUsuario = $u['tipo'];
    }
}

if (is_null($tipoUsuario)) {
    echo "Usuário ou senha errados";
    exit;
}

echo "O usuário $login é do tipo $tipoUsuario";
