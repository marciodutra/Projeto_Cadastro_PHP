<?php
// Mensagens de Erro
$msg[0] = "Conex�o com o banco falhou!";
$msg[1] = "N�o foi poss�vel selecionar o banco de dados!";

// Fazendo a conex�o com o servidor MySQL
$conexao = mysql_connect("localhost","root","") or die($msg[0]);
mysql_select_db("lojakastor",$conexao) or die($msg[1]);

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
    <h2>K & G Informatica</h2>
    <hr />
    <p>
<table border="1"><tr>
   <td><b>ID</b></td>
   <td><b>Cliente CPF</b></td>
   <td><b>ID - Servi&ccedil;os</b></td>
   <td><b>Pre&ccedil;o Total</b></td>
   <td><b>Equipamento</b></td>
   <td><b>Voltagem</b></td>
   <td><b>Descri&ccedil;ao</b></td>
   <td><b>Data</b></td>
</tr>
<?php
$conexao = mysql_connect("localhost","root","");
mysql_select_db("lojakastor",$conexao);
$query = "SELECT idPedido, Clientes_cpf, Servicos_idServicos, precoTotal, equipamento, descricao, data, voltagem FROM Pedido order by idPedido;";
$resultado = mysql_query($query,$conexao);

while ($linha = mysql_fetch_array($resultado)) {
   ?>
   <tr>
      <td><?php echo $linha['idPedido']; ?></td>
      <td><?php echo $linha['Clientes_cpf']; ?></td>
      <td><?php echo $linha['Servicos_idServicos']; ?></td>
      <td><?php echo $linha['precoTotal']; ?></td>
      <td><?php echo $linha['equipamento']; ?></td>
      <td><?php echo $linha['voltagem']; ?></td>
      <td><?php echo $linha['descricao']; ?></td>
      <td><?php echo $linha['data']; ?></td>
   </tr>
   <?php
}
?>
</table>
	</div>

</div>

</body>
</html>
