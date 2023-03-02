<?php

$header = "Content-type: text/html; charset-UTF-8 ";

include 'conecta.php';
include 'ver_sessao.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ID_PERCURSO = $_POST['ID_PERCURSO'];
$ROTA = $_POST['ROTA'];
$TEMPO_P = $_POST['TEMPO_P'];
$TROCA_M = $_POST['TROCA_M'];
$NUM_MOT = $_POST['NUM_MOT'];
$PERCURSO = $_POST['PERCURSO'];
$VALOR_B = $_POST['VALOR_B'];
$VALOR_SB = $_POST['VALOR_SB'];





$erros = 0;

if ($ID_PERCURSO == '') {
	$erros++;
	$html_erros = $html_erros."<br>Codigo";
}
if ($ROTA == '') {
	$erros++;
	$html_erros = $html_erros."<br>NOME";
}

if ($TEMPO_P == '') {
	$erros++;
	$html_erros = $html_erros."<br>ENDERÇO";
}

if ($TROCA_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>NUMERO";
}
if ($NUM_MOT == '') {
	$erros++;
	$html_erros = $html_erros."<br>BAIRRO";
}

if ($PERCURSO == '') {
	$erros++;
	$html_erros = $html_erros."<br>CIDADE";
}

if ($VALOR_B == '') {
	$erros++;
	$html_erros = $html_erros."<br>UF";
}

if ($VALOR_SB == '') {
	$erros++;
	$html_erros = $html_erros."<br>CEP";
}




echo "".'<br><br>';

echo "Erros - ".$erros;

if ($erros == 0){

	$sql = "INSERT INTO PERCURSO VALUES('$ID_PERCURSO','$ROTA', '$TEMPO_P','$TROCA_M','$NUM_MOT','$PERCURSO','VALOR_B','VALOR_SB')";

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