<?php

$header = "Content-type: text/html; charset-UTF-8 ";

include 'conecta.php';
include 'ver_sessao.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$COD_MOTORISTA = $_POST['COD_MOTORISTA'];
$NOME_M = $_POST['NOME_M'];

$ENDEREÇO_M = $_POST['ENDEREÇO_M'];

$NUMERO_M = $_POST['NUMERO_M'];
$BAIRRO_M = $_POST['BAIRRO_M'];
$CIDADE_M = $_POST['CIDADE_M'];
$UF_M = $_POST['UF_M'];
$CEP_M = $_POST['CEP_M'];
$FONE_M = $_POST['FONE_M'];
$DATA_N_M = $_POST['DATA_N_M'];
$CNH_M = $_POST['CNH_M'];
$CATEGORIA = $_POST['CATEGORIA'];
$EMAIL_M = $_POST['NUMERO_M'];




$erros = 0;

if ($COD_MOTORISTA == '') {
	$erros++;
	$html_erros = $html_erros."<br>Codigo";
}
if ($NOME_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>NOME";
}

if ($ENDEREÇO_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>ENDERÇO";
}

if ($NUMERO_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>NUMERO";
}
if ($BAIRRO_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>BAIRRO";
}

if ($CIDADE_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>CIDADE";
}

if ($UF_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>UF";
}

if ($CEP_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>CEP";
}

if ($FONE_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>FONE";
}
if ($DATA_N_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>DATA";
}
if ($CNH_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>CNH";
}
if ($CATEGORIA == '') {
	$erros++;
	$html_erros = $html_erros."<br>CATEGORIA";
}
if ($EMAIL_M == '') {
	$erros++;
	$html_erros = $html_erros."<br>EMAIL";
}



echo "".'<br><br>';

echo "Erros - ".$erros;

if ($erros == 0){

	$sql = "INSERT INTO MOTORISTA VALUES('$COD_MOTORISTA','$NOME_M', '$ENDEREÇO_M','$NUMERO_M','$BAIRRO_M','$CIDADE_M','UF_M','CEP_M','FONE_M','DATA_N_M','$CNH_M','$CATEGORIA','$EMAIL_M')";

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