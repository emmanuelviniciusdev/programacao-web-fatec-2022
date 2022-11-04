<?php

/* arquivo: consultar_MySQL-03.php
Mostra resultado de consulta à BD MySQL .
*/
echo 
"arquivo em uso: consultar_MySQL-03.php <br>
<br>  ===> Consulta à BD: \"SELECT * FROM livros\".
<br><br><br>  ===> TEXTO INCLUÍDO AQUI SOMENTE PARA FINS DIDÁTICOS: consultar_MySQL-03.php.
";

require_once 'login_MySQL-01.php';
$conexão = new mysqli($servidor, $usuário, $senha, $bd);
if ($conexão->connect_error) die($conexão->connect_error);

$consulta = "SELECT * FROM livros";
$resultado = $conexão->query($consulta);
if (!$resultado) {echo "<br><br><br> NOK - Ocorreu erro ao usar conectar_consultar_MySQL-03.php"; die($conexão->error);}
else echo "<br><br><br> OK - NÃO ocorreu erro ao usar consultar_MySQL-03.php<br><br><br> consulta ok."; 
?>