<php
	//Sample Database Connection Syntax for PHP and MySQL.
	
	//Connect To Database
	
	$hostname="your_hostname";
	$username="your_dbusername";
	$password="your_dbpassword";
	$dbname="your_dbusername";
	$usertable="your_tablename";
	$yourfield = "your_field";
	
	mysql_connect($hostname,$username, $password) ou desconexão ("html>script language='JavaScript'>alert(“Não foi possível se conectar ao banco de dados! Tente novamente mais tarde.'),history.go(-1)/script>/html>");
	mysql_select_db($dbname);
	
	# Verifique se o registro existe
	
	$query = "SELECT * FROM $usertable";
	
	$result = mysql_query($query);
	
	if($result){
		while($row = mysql_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Nome: ".$name."br/>";
		}
	}
?>