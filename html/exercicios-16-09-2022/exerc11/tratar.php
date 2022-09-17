<?php

date_default_timezone_set("America/Sao_Paulo");

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$credenciaisVazias = empty($nome) || empty($email) || empty($login) || empty($senha);

if ($credenciaisVazias) {
    echo "Por favor, especifique as credenciais.";
    exit;
}

$emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);

if ($emailValido) {
    echo "seu e-mail foi cadastrado com sucesso";
    
    /**
     * Adiciona informações dos usuários no arquivo "output.txt".
     * O arquivo é criado caso ainda não exista.
     */
    $arquivoTxt = fopen("output.txt", "a");
    
    $dataHoraAtual = date("d/m/Y") . " " . date("h:i:s a");

    $dadosUsuario = "[$dataHoraAtual] $nome - $email - $login - $senha\n";
    
    fwrite($arquivoTxt, $dadosUsuario);

    fclose($arquivoTxt);

} else {
    echo "e-mail inválido";
}
?>
