<?php
// Mensagens de Erro
$msg[0] = "Conex�o com o banco falhou!";
$msg[1] = "N�o foi poss�vel selecionar o banco de dados!";

// Fazendo a conex�o com o servidor MySQL
$conexao = mysql_connect("localhost","root","") or die($msg[0]);
mysql_select_db("mydb",$conexao) or die($msg[1]);

// Colocando o In�cio da tabela
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Cadastro em PHP</title>
</head>
<?php
include "css.php";
?>
<body>

<div id="geral_conteudo">
	
<?php include "menu.php";?>
    
    <div id="box_right">
    <h2>Sistema de Cadastro em PHP</h2>
    <hr />
    <p>

<table border="1"><tr>
   <td><b>C&oacute;digo</b></td>
   <td><b>Descri&ccedil;&atilde;o</b></td>
   <td><b>Pre&ccedil;o</b></td>
   <td><b>Quantidade</b></td>
</tr>
<?php

// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
$query = "SELECT codigo, descricao, preco, quantidade_estoque FROM Mercadorias order by codigo";
$resultado = mysql_query($query,$conexao);
while ($linha = mysql_fetch_array($resultado)) {
   ?>
   <tr>
      <td><?php echo $linha['codigo']; ?></td>
      <td><?php echo $linha['descricao']; ?></td>
      <td><?php echo $linha['preco']; ?></td>
      <td><?php echo $linha['quantidade_estoque']; ?></td>
   </tr>
   <?php
}
?>
</table>

	</div>

</div>



</body>
</html>