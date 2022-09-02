<?php

$usuario = [
    'login' => 'anv',
    'senha' => 'f@tek',
];

$login = $usuario['login'];
$senha = $usuario['senha'];

echo "O array associativo \$usuario foi preenchido com:";
echo "<br>";
print_r($usuario);

echo "<br>";
echo "<br>";

echo "O conteúdo do array associativo é:";
echo "<br>";
echo "login = $login";
echo "<br>";
echo "senha = $senha";
