<?php 
include "cabecalho.php";
include "conexao.php";

$id = $_GET['id'];
$nome_cliente = 'nome_cliente';
$endereco = 'endereco';
$telefone = 'telefone';
$servicos = 'servicos';
$materiais = 'materiais';
$valor_mao_de_obra = 'valor_mao_de_obra';
$valor_materiais = 'valor_materiais';
$tempo_previsto = 'tempo_previsto';

$sql = "select * from tb_orcamentos where id = $id";

$resultado = mysqli_query($conexao, $sql);
while($umOrçamento = mysqli_fetch_assoc($resultado)):
    $nome_cliente = $umOrçamento['nome_cliente'];
    $endereco = $umOrçamento['endereco'];
    $telefone = $umOrçamento['telefone'];
    $servicos = $umOrçamento['servicos'];
    $materiais = $umOrçamento['materiais'];
    $valor_mao_de_obra = $umOrçamento['valor_mao_de_obra'];
    $valor_materiais = $umOrçamento['valor_materiais'];
    $tempo_previsto = $umOrçamento['tempo_previsto'];
endwhile;    
?>
<h2 class="text-center">Visualizando Orçamento</h2>
<div class="row">
    <div class="col-12 text-center border border-success p-2 mb-2">
        <h1><?=$nome_cliente?></h1>
    </div>
    <div class="col-12 border border-success p-2 mb-2">
        <h2>Endereço: <br><?=$endereco?></h2>
    </div>
    <div class="col-6 border border-success p-2 mb-2">
        <h3>Telefone: <br><?=$telefone?></h3>
    </div>
    <div class="col-6 border border-success p-2 mb-2">
        <h3>Serviços: <br><?=$servicos?></h3>
    </div>
    <div class="col-12 border border-success p-2 mb-2">
        <h3>Materiais: <br><?=$materiais?></h3>        
    </div>
    <div class="col-6 border border-success p-2 mb-2">
        <h3>Valor mão de obra: <br><?=$valor_mao_de_obra?></h3>
    </div>
    <div class="col-6 border border-success p-2 mb-2">
        <h3>Valor dos materiais: <br><?=$valor_materiais?></h3>
    </div>
    <div class="col-12 text-center border border-success p-2 mb-2">
        <h3>Tempo previsto: <br><?=$tempo_previsto?></h3>
    </div>
</div>


<a href="admin.php" class="btn btn-info">Voltar</a>
<?php
mysqli_close($conexao);
include "rodape.php";
?>