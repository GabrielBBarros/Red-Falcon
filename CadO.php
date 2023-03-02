<?php

$header = "Content-type: text/html; charset-UTF-8 ";

include 'conecta.php';
include 'ver_sessao.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ID_PLACA = $_POST['ID_PLACA'];
$MARCA = $_POST['MARCA'];
$TIPO = $_POST['TIPO'];
$ANO = $_POST['ANO'];
$OBSERVACAO = $_POST['OBSERVACAO'];
$ASSENTO = $_POST['ASSENTO'];






$erros = 0;

if ($ID_PLACA == '') {
	$erros++;
	$html_erros = $html_erros."<br>Codigo";
}
if ($MARCA == '') {
	$erros++;
	$html_erros = $html_erros."<br>NOME";
}

if ($TIPO == '') {
	$erros++;
	$html_erros = $html_erros."<br>ENDERÇO";
}

if ($ANO == '') {
	$erros++;
	$html_erros = $html_erros."<br>NUMERO";
}
if ($OBSERVACAO == '') {
	$erros++;
	$html_erros = $html_erros."<br>BAIRRO";
}

if ($ASSENTO == '') {
	$erros++;
	$html_erros = $html_erros."<br>CIDADE";
}



echo "".'<br><br>';

echo "Erros - ".$erros;

if ($erros == 0){

	$sql = "INSERT INTO ONIBUS VALUES('$ID_PLACA','$MARCA', '$TIPO','$ANO','$OBSERVACAO','$ASSENTO')";

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