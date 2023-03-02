<?php

$header = "Content-type: text/html; charset-UTF-8 ";

include 'conecta.php';
include 'ver_sessao.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$NOME_US = $_POST['NOME_US'];

$TIPO_US = $_POST['TIPO_US'];

$USER_ID = $_POST['USER_ID'];

$SENHA_ID = $_POST['SENHA_ID'];
$erros = 0;

if ($NOME_US == '') {
	$erros++;
	$html_erros = $html_erros."<br>Nome";
}

if ($TIPO_US == '') {
	$erros++;
	$html_erros = $html_erros."<br>TIPO";
}

if ($USER_ID == '') {
	$erros++;
	$html_erros = $html_erros."<br>USER";
}
if ($SENHA_ID == '') {
	$erros++;
	$html_erros = $html_erros."<br>SENHA";
}

echo "".'<br><br>';

echo "Erros - ".$erros;

if ($erros == 0){

	$sql = "INSERT INTO USUARIO VALUES('$USER_ID','$TIPO_US','$USER_ID','$SENHA_ID')";

if (mysqli_query($con, $sql)) {

	echo "

	<div align=center><font-face=Arial size=2><h2>Cadastrado efetuado com sucesso!!</h2>";
}

else {
	echo "Error: ". $sql . "<br>" . mysqli_error($con);
	
			 		
}

mysqli_close($con);


}
?>