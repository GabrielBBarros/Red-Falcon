
<html>
<head>
	<title>Login</title><meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" href="semantic.css" />
</head>

<body bgcolor="#FFFFFF" text="#000000">
	<div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="#" class="header item">
        <img class="logo" src="http://www.prontoflexinsurance.com/sites/5817c7a210262e182aad0099/theme/images/falcon-illustration.png?1548198039" width="45px" height="45px">
        
      </a>
      <div class="ui simple dropdown item">
        Cadastro <i class="dropdown icon"></i>
        <div class="menu">
          <a href="CadastroM" class="item" href="#">Motorista</a>
          <div class="divider"></div>
          <a href="CadastroO" class="item" href="#">Onibus</a>
          <div class="divider"></div>
          <a href="CadastroPa" class="item" href="#">Passageiro</a>
          <div class="divider"></div>
          <a href="CadastroPe" class="item" href="#">Percurso</a>
          <div class="divider"></div>
          <a href="cadContatos.html" class="item" href="#">Usuário</a>
          <div class="divider"></div>
          
          
          </div>
          
        </div>
        <div class="ui simple dropdown item">
        Lançamento <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="#">Viagens</a>
          <div class="divider"></div>
          <a class="item" href="#">Venda de Passagens</a>
          <div class="divider"></div>
          
          
          
          </div>
          
        </div>
        <div class="ui simple dropdown item">
        Relatório <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="#">Motorista</a>
          <div class="divider"></div>
          <a class="item" href="#">Onibus</a>
          <div class="divider"></div>
          <a class="item" href="#">Passageiro</a>
          <div class="divider"></div>
          <a class="item" href="#">Percurso</a>
          <div class="divider"></div>
          <a class="item" href="#">Viagens</a>
          <div class="divider"></div>
          </div>
          
        </div>
      <div class="ui simple dropdown item">
        Ajuda <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="#">Back Up</a>
          <div class="divider"></div>
          <a class="item" href="#">Restauração</a>
          <div class="divider"></div>
          <a class="item" href="#">Link Item</a>
          <div class="divider"></div>
          </div>
          </div>
          </div>
          <div class="ui simple dropdown item">
          <a href="login.php" class="item">Login</a>
        </div>
        <div class="ui simple dropdown item">
          <a href="#" class="item">Sign Up</a>
          </div></div>
        
      
    </div>
    </div>
  </div>
<br><br>


<form name="frm_login" method="POST" action="login.php">
<table width="40%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td colspan="2"><b><font face="Arial" size="3">IDENTIFICAÇÃO</font></b></td>
</tr>

<tr>
	<td height="33%" width="25"><font face="Arial" size="2">Apelido:</font></td>
	<td height="67%" width="25"><font face="Arial" size="2">
	<input type="text" name="apelido_login"></font></td>
</tr>

<tr>
	<td height="33%" width="25"><font face="Arial" size="2">Senha:</font></td>
	<td height="67%" width="25"><font face="Arial" size="2">
	<input type="password" name="senha_login"></font></td>
</tr>

<tr>
<td colspan="2">
<input type="submit" name="entrar" value="Entrar &gt;&gt;"></td>
</tr>
</table>
</form>
</body>
</html>
