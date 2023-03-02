<?php

include "conecta.php";

echo "" . "<br><br>";

$USER_ID = $_POST['USER_ID'];

$senha_login = $_POST['senha_login'];

$con = mysqli_connect($host, $usuario, $senha, $banco);

if(($USER_ID) AND ($senha_login)) {

$sql = "SELECT * FROM USUARIO ORDER BY USER_ID";

$res = mysqli_query ($con, $sql);

$total = mysqli_num_rows($res);

echo "Total de Resultados: " . $total . "<br><br>";

while ($f = mysqli_fetch_array ($res))
{
echo "<table width=100 border='2'>";
echo"<tr align='center'>";
echo "<th>"."USER_ID". "</th> ";

echo "<th>"."APELIDO”"."</th>";

echo "<th>"."SENHA"."</th>";

echo"<tr align='center'>";

echo "<td>" . $f['USER_ID'] . "</td> ";

echo "<td>" . $f['NOME_US'] . " </td> ";

echo "<td>" . $f['SENHA_ID']."</td>";

echo"</tr></table>";
}

$apelido = $f['USER_ID'];

$senha = $f['SENHA_ID'];

if (($USER_ID == $NOME_US) AND ($SENHA_ID == $SENHA_ID)) {
	
session_start("user");
session_register("USER_ID","NOME_US","SENHA_ID");

mysqli_close($con);

}

}

header ("Refresh:5; url=opcoes.php");
?>