<?php
/* arquivo: mostrar_MySQL-04.php
Mostra resultado de consulta à 1a linha da tabela livros da BD MySQL .
*/
require_once 'login_MySQL-01.php';
$conexão = new mysqli($servidor, $usuário, $senha, $bd);
if ($conexão->connect_error) die($conexão->connect_error);

$consulta = "SELECT * FROM livros";
$resultado = $conexão->query($consulta);
if (!$resultado) die($conexão->error);

$linhas = $resultado->num_rows;

$resultado->data_seek(0);
echo 'Ano: '.$resultado->fetch_assoc()['ano'] . '<br>';

for ($j = 0 ; $j < $linhas ; ++$j)
{
echo '<br>';

//$resultado->data_seek($j);
//echo 'Id: ' . $resultado->fetch_assoc()['id'] . '<br>';

$resultado->data_seek($j);
echo 'Autor: ' . $resultado->fetch_assoc()['autor'] . '<br>';

$resultado->data_seek($j);
echo 'Título: ' . $resultado->fetch_assoc()['titulo'] . '<br>';

$resultado->data_seek($j);
echo 'Área: ' . $resultado->fetch_assoc()['area'] . '<br>';

//$resultado->data_seek($j);
//echo 'Edição: ' . $resultado->fetch_assoc()['edicao'] . '<br>';

$resultado->data_seek($j);
echo 'Ano: ' . $resultado->fetch_assoc()['ano'] . '<br>';

$resultado->data_seek($j);
echo 'Tombo: ' . $resultado->fetch_assoc()['tombo'] . '<br>';

}
$resultado->close();
$conexão->close();

echo
"<br><br><br> consulta ok.";
?>