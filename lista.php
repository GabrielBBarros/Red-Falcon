<?php
session_start();
 include "conecta.php"; //Conecta com a nosso banco de dados MySQL
 include "ver_sessao.php"; //Verifica se a sessão está ativa

 
 ?>
 <table width="95%" border="0" cellspacing="1" cellpadding="0" align="center">
  <tr bgcolor="#6699CC" align="center">
    <td colspan="5">
      <div align="center"><font face="Arial" size="4"><b><font color="#FFFFFF">Contatos
        Cadastrados</font></b></font></div>
    </td>
  </tr>
 
 <?php
 

$pesquisar = "sim";

$pesq = "a";

 
   $con = mysqli_connect($host, $usuario, $senha, $banco);
  $sql_contato = "SELECT USER_ID, NOME_US FROM tb_contatos WHERE  tb_contatos.NOME_US = NOME_US LIKE '%pesq%'";
  if($pesquisar == 'sim'){
	  $sql_contato = $sql_contato."AND NOME_US LIKE '%pesq%'";
	  
	 
	  
	  
  $res  = $sql_contato ." ORDER BY USER_ID ";

  

 
$con = mysqli_connect($host, $usuario, $senha, $banco);
  
 
 $sql = "SELECT * FROM USURAIO ORDER BY USER_ID"; 

$res = mysqli_query($con, $sql);

if(mysqli_num_rows($res) > 0) {

 
// conta o número de registros
$total = mysqli_num_rows($res);
 

 

 
   while($g = mysqli_fetch_array($res))
 
  ?>
 





  <tr bgcolor="cccccc" align="center">
  
  <td width="3%">
      <div align="center"><b><font face="Arial" size="2">ID Contato</font></b></div>
  
    <td width="17%">
      <div align="center"><b><font face="Arial" size="2">Data de inclus&atilde;o</font></b></div>
    </td>
    <td width="44%">
      <div align="center"><b><font face="Arial" size="2">Contato</font></b></div>
    </td>
    <td width="26%">
      <div align="center"><b><font face="Arial" size="2">Email</font></b></div>
    </td>
    <td width="10%">
      <div align="center"><b><font face="Arial" size="2">Telefone</font></b></div>
    </td>
   
  </tr>
  

  <tr bgcolor="ebebeb" align="center">
    
	<td width="3%" height="25"><font face="Arial" size="2">
      <?php echo $g['USER_ID'];?>
      </font></td>
	  
    <td width="44%" height="25"><font face="Arial" size="2">
      <?php echo $g['NOME_US'];?>
      </font></td>
	  
    <td width="26%" height="25"><font face="Arial" size="2">
      <?php echo $g['TIPO US'];?>
	   </font></td>
	   <td width="26%" height="25"><font face="Arial" size="2">
      
      <?php echo $g['SENHA_ID'];?>
      </font></td>
 <?php } 
  
}
   /* fecha mysql_num_rows > 0 */
 else{
   echo "<br><br><div align=center><font face=Arial size=2>
        Nenhum Contato Cadastrado!!<br><br></font></div>";
}
  

  
  echo"<center>Total de Contatos Cadastrados: " . $total . "</center><br>";
  
		
  
  /* fecha mysql_num_rows > 0 */ mysqli_close($con);   ?>
  
  
</table>
  
  <br><div align=center><font face=Arial size=2>
  <a href='gerU.html'>[ Voltar para o menu de op&ccedil;&otilde;es ]</a></font></div>
  
 </body>
</html>  

