<?php

session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$dataNascimento = $_POST['dataNascimento'];
$fileFotoUsuario = $_FILES['fileFotoUsuario'];

$existemCamposVazios = !isset($nome) || !isset($email) || !isset($dataNascimento) || !isset($fileFotoUsuario);

if ($existemCamposVazios) {
    die("Por favor, especifique todos os campos");
}

$extensaoArquivo = explode('.', $fileFotoUsuario['name'])[1];
$nomeArquivoFotoUsuario = date("Y-m-d") . '_' . $nome . '.' . $extensaoArquivo;

move_uploaded_file($fileFotoUsuario['tmp_name'], 'fotos/' . $nomeArquivoFotoUsuario);

$dataNascimentoFormatada = date_format(date_create($dataNascimento), "d/m/Y");

$_SESSION['ultimoUsuarioSalvo'] = [
    'nome' => $nome,
    'email' => $email,
    'dataNascimento' => $dataNascimentoFormatada,
    'nomeArquivoFotoUsuario' => $nomeArquivoFotoUsuario,
];

header("Location: index.php");
