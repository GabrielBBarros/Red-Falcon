<?

require 'phpzip.inc.php';

$db_name    = 'TRANSPORTE';
$hostdb     = 'localhost';
$userdb     =  'root';
$passdb     = '';
// as tabelas que quero
$tabelas = array ('CLIENTE','MOTORISTA', 'USUARIO'); 
$tempdir = "/tmp"; // diretorio temporario
$filename = 'sql.'.time().'.txt';

// variaveis do sistema
$incluir_insert = 1; // imprime os INSERT's tambem

// ----------------------------------------------------
// BLOCO PRINCIPAL
// conectar ao banco de dados
$con = mysql_pconnect($hostdb,$userdb,$passdb);
mysql_select_db($db_name);

// imprimir tipo do documento na tela

// imprimir o dump do banco de dados
chdir($tempdir);
$fp = fopen($filename,"w"); 
for ($x=0; $x<count($tabelas); $x++) {
   $saida = getTableDef($db_name, $tabelas[$x], "\n");
   fputs($fp,$saida."\n\n");

   if ($incluir_insert) {
      getTableContentFast($db_name, $tabelas[$x], '', '');
      fputs($fp,"\n\n");
   }
}
fclose($fp);

// gerar o arquivo zipado
$zipname = ereg_replace("txt$","zip",$filename);
$zip = new PHPZip();
$files[]=$filename;
$zip -> Zip($files, $zipname);

$tamanho = filesize($zipname);

// imprimir arquivo p/ download
header("Content-Type: application/zip");
header("Content-Length: $tamanho");
header("Content-Disposition: attachment; filename=$zipname");
header("Content-Transfer-Encoding: binary");

// abrir e enviar o arquivo
$fp = fopen("$zipname", "r");
fpassthru($fp);
fclose($fp);