<?php

/* arquivo: conectar_MySQL-02.php
Efetua a conexão com a BD MySQL 
para o usuário identificado 
no arquivo incluído no presente arquivo.
*/
echo 
"Nome do arquivo em uso: conectar_MySQL-02.php <br>
<br>  ===> Acessa uma BD escolhida para o usuário identificado.
<br><br><br>  ===> TEXTO INCLUÍDO AQUI SOMENTE PARA FINS DIDÁTICOS: conectar_MySQL-02.php.
";

require_once 'login_MySQL-01.php';
$conexão = new mysqli($servidor, $usuário, $senha, $bd);
var_dump($conexão);
// if ($conexão->connect_error) {echo "<br><br><br> NOK - Ocorreu erro ao usar conectar_MySQL-02.php"; echo $conexão->connect_error;echo "fim";}
// 	else echo "<br><br><br>  OK - Não ocorreu erro ao usar conectar_MySQL-02.php";
	
?>