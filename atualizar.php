<?php
include "conexao.php";
$id = $_GET['id'];
$nome_cliente = $_POST['nome_cliente'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$servicos = $_POST['servicos'];
$materiais = $_POST['materiais'];
$valor_mao_de_obra = $_POST['valor_mao_de_obra'];
$valor_materiais = $_POST['valor_materiais'];
$tempo_previsto = $_POST['tempo_previsto'];

$sql = "update tb_orcamentos set nome_cliente = '$nome_cliente', endereco='$endereco', telefone='$telefone', servicos='$servicos' ,materiais='$materiais' ,valor_mao_de_obra='$valor_mao_de_obra' ,valor_materiais='$valor_materiais' ,tempo_previsto='$tempo_previsto' where id = $id";

mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location:admin.php');

?>