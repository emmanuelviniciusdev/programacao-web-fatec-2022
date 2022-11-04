<?php



# header: Informa qual o conjunto de caracteres será usado.

header('Content-Type: text/html; charset="utf-8"');

//require_once: informa o nome do arquivo com os dados de login

require_once 'login_MySQL-01.php';
$conexão = new mysqli($servidor, $usuário, $senha, $bd);

// $tab: nome da tabela a ser usada para inserção, leitura e remoção de dados

$tab="livros";

// $arq: nome do arquivo de script: forms_PHP_MySQL-06-tst.php

$arq = "forms_PHP_MySQL-06.php";

echo '<br>';
echo '<br>';
echo "Nome do arquivo em uso: $arq ";
echo '<br>';
echo "Nome da tabela em uso: $tab";
echo '<br>';
echo '<br>';

if ($conexão->connect_error) die($conexão->connect_error);

// ************* Apagar dados da tabela *************

if (isset($_POST['apagar']) && isset($_POST['tombo']))
{
	$tombo = get_post($conexão, 'tombo');
	$query= "DELETE FROM $tab WHERE tombo='$tombo'";
	$resultado = $conexão->query($query);
	
		echo '<br>';
		echo "Nome do arquivo em uso: $arq ";
		echo '<br>';
		echo "Nome da tabela em uso: $tab";
		echo '<br>';
		echo "Botão Apagar Registro foi pressionado ";
		echo '<br>';
		//echo '<br>';echo '<br>';echo '<br>';	
		
	if (!$resultado) echo "Erro ao remover dados: $query<br>" .
		$conexão->error . "<br>";
		else {echo "OK - NÃO houve erro ao remover dados<br>";}
	}
	else echo "Não é apagar - passou na POSIÇÃO (A)";
	// ************* Inserir dados na tabela ************* 

if (isset($_POST['autor'])
	&&
	isset($_POST['titulo'])
	&&
	isset($_POST['area'])
	&&
	isset($_POST['ano'])
	&&
	isset($_POST['tombo'])
	)

{
	$autor 	= get_post($conexão, 'autor');
	$titulo	= get_post($conexão, 'titulo');
	$area 	= get_post($conexão, 'area');
	$ano 	= get_post($conexão, 'ano');
	$tombo 	= get_post($conexão, 'tombo');

	echo '<br>';
	echo "Nome do arquivo em uso: $arq ";
	echo '<br>';
	echo "Nome da tabela em uso: $tab";
	echo '<br>';
	echo "Botão Adicionar Registro foi pressionado ";
	echo '<br>';
	echo '<br>';echo '<br>';echo '<br>';

	$query	= "INSERT INTO $tab VALUES"."('$autor', '$titulo', '$area', '$ano', '$tombo')";	
		
	$resultado 	= $conexão->query($query);

	if (!$resultado) echo "Erro ao inserir dados: $query<br>" .
	$conexão->error . "<br><br>";
	
}

// ************* Montar os formulários para entrada de dados na tabela *************

echo <<<_END
<form action="$arq" method="post"><pre>
	Autor 	<input type="text" name="autor">
	
	Título 	<input type="text" name="titulo">
	
	Área 	<input type="text" name="area">
	
	Ano 	<input type="text" name="ano">
	
	Tombo 	<input type="text" name="tombo">
	
	<input type="submit" value="Adicionar Registro">
	
</pre></form>
_END;

/*
	<input type="password" value="senha">
	<input type="radio" value="xxx">
	<input type="radio" value="yyy">
	<input type="checkbox" value="xxx">
	<input type="file" value="xxx">
	<input type="image" value="xxx">
*/

//  ************* Mostrar os registros existentes na tabela                *************
//  ************* Note que o botão de apagar é colocado para cada registro.*************

$query= "SELECT * FROM $tab";

$resultado = $conexão->query($query);

if (!$resultado) die ("Erro de acesso à base de dados: " . $conexão->error);

$linhas = $resultado->num_rows;

for ($j = 0 ; $j < $linhas ; ++$j)
	{
	$resultado->data_seek($j);
	$linha = $resultado->fetch_array(MYSQLI_NUM);

	echo <<<_END
<pre>
	Autor  $linha[0]
	Título $linha[1]
	Área   $linha[2]
	Ano    $linha[3]
	Tombo  $linha[4]
<form action="$arq" method="post">      <input type="hidden" name="apagar" value="yes"> <input type="hidden" name="tombo" value="$linha[4]"> <input type="submit" value="Apagar Registro"></form>
</pre>

_END;
}

$resultado->close();
$conexão->close();

function get_post($conexão, $variável)
	{
	return $conexão->real_escape_string($_POST[$variável]);
	}
?>
