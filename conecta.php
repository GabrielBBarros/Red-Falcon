<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'TRANSPORTE';

if(!($mysqli = new mysqli($host, $usuario, $senha, $banco)))
{
	echo "<p align=\"center\">
	
	<big><strong>Não foi possível estabelecer uma conexão com o gerenciador MySQL ou Banco de dados
	
		Favor contactar o Administrador.
	</strong></big></p>";
	exit;
	
}

if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());

echo "</h2>Conectado com sucesso</h2>";

$con = $mysqli;

?>