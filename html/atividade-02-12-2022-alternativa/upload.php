<?php

$tamanhoMaximoBytes = 9000000;

$tiposArquivoAceitos = array(
    "image/gif",
    "image/jpeg",
    "image/bmp",
    "application/pdf",
);

$arquivosSelecionados = $_FILES['file'];
$totalArquivosSelecionados = count($arquivosSelecionados['name']);

for ($i = 0; $i < $totalArquivosSelecionados; $i++) {
    $nomeArquivo = $arquivosSelecionados['name'][$i];
    $tmpNameArquivo = $arquivosSelecionados['tmp_name'][$i];
    $tipoArquivo = $arquivosSelecionados['type'][$i];
    $tamanhoArquivo = $arquivosSelecionados['size'][$i];

    $tamanhoArquivoInvalido = $tamanhoArquivo > $tamanhoMaximoBytes || $tamanhoArquivo == 0;
    $tipoArquivoInvalido = array_search($tipoArquivo, $tiposArquivoAceitos) == false;

    if ($tamanhoArquivoInvalido) {
        die("<h1>O tamanho do arquivo \"$nomeArquivo\" é inválido</h1>");
    }

    if ($tipoArquivoInvalido) {
        die("<h1>O tipo do arquivo \"$nomeArquivo\" é inválido</h1>");
    }

    $uploadArquivoRealizadoSucesso = move_uploaded_file($tmpNameArquivo, "arquivos/$nomeArquivo");

    if ($uploadArquivoRealizadoSucesso) {
        echo "Upload do arquivo \"$nomeArquivo\" realizado com sucesso! <br>";
    }
}
