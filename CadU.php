<?php

$header = "Content-type: text/html; charset-UTF-8 ";

include 'conecta.php';
include 'ver_sessao.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ID_CLIENTE = $_POST['ID_CLIENTE'];
$CPF_CLI = $_POST['CPF_CLI'];
$NOME_CLI = $_POST['NOME_CLI'];
$CIDADE_CLI = $_POST['CIDADE_CLI'];
$UF_CLI = $_POST['UF_CLI'];
$DATA_C_M = $_POST['DATA_C_M'];
$OBSERVACAO = $_POST['OBSERVACAO'];


$erros = 0;

if ($ID_CLIENTE == '') {
	$erros++;
	$html_erros = $html_erros."<br>";
}
if ($CPF_CLI == '') {
	$erros++;
	$html_erros = $html_erros."<br>";
}

if ($NOME_CLI == '') {
	$erros++;
	$html_erros = $html_erros."<br>";
}

if ($CIDADE_CLI == '') {
	$erros++;
	$html_erros = $html_erros."<br>";
}
if ($UF_CLI == '') {
	$erros++;
	$html_erros = $html_erros."<br>";
}

if ($DATA_C_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>";
}

if ($OBSERVACAO == '') {
	$erros++;
	$html_erros = $html_erros."<br>";
}





echo "".'<br><br>';

echo "Erros - ".$erros;

if ($erros == 0){

	$sql = "INSERT INTO CLIENTE VALUES('$ID_CLIENTE','$CPF_CLI','$NOME_CLI','$CIDADE_CLI','$UF_CLI','$DATA_C_M','$OBSERVACAO')";

if (mysqli_query($con, $sql)) {

	echo "

	<div align=center><font-face=Arial size=2><h2>Cadastrado efetuado com sucesso!!</h2>";
}

else {
	echo "Error: ". $sql . "<br>" . mysqli_error($con);
	echo "<div align=center><font-face=Arial size=2><b>ATEN&Ccedil;&Atilde;O</b><br><br>Foram encontrados <b>$erros</b>
			 		erros(s) no cadastro do contato:<br><b>$html_erros</b>";
			 		
}

mysqli_close($con);


}
?>