<?php
	//baixar a class mPDF no site http://www.mpdf1.com/mpdf/index.php
	//Descompactar o arquivo na pasta pdf
	include ('fpdf.php');
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "TRANSPORTE";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
	
	$id = "1";
	$result_usuario = "SELECT * FROM usuario WHERE nome_us = '$id' LIMIT 1";
	$resultado_usuario = mysqli_query($conn, $result_usuario);	
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);	
	
	
	$pagina = 
		"<html>
			<body>
				<h1>Informações do Usuário</h1>
				Id: ".$row_usuario['nome_us']."<br>
				Nome: ".$row_usuario['tipo_us']."<br>
				E-mail: ".$row_usuario['user_id']."<br>
				Senha: ".$row_usuario['senha_id']."<br>
				<h4>http://www.celke.com.br</h4>
			</body>
		</html>
		";

$arquivo = "Cadastro01.pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($pagina);

$mpdf->Output($arquivo, 'I');

// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
?>
