<?php
include "cabecalho.php"; 
include "conexao.php";
$id = $_GET['id'];
$nome_cliente = "nome_cliente";
$endereco = "endereco";
$telefone = "telefone";
$servicos = "servicos";
$materiais = "materiais";
$valor_mao_de_obra = "valor_mao_de_obra";
$valor_materiais = "valor_materiais";
$tempo_previsto = "tempo_previsto";

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

<br><h2 class="text-center">EDITAR ORÇAMENTO</h2>
<br>


<form class="row g-3 border border-sucess" method="post" action="atualizar.php?id=<?=$id;?>" enctype="multipart/form-data">
    <div class="col-md-6">
        Nome do cliente: <input type="text" name="nome_cliente" value="<?=($nome_cliente)?>" class="form-control">
    </div>
    <div class="col-md-6">
        Telefone: <input type="text" name="telefone" value="<?=($telefone)?>" class="form-control">
    </div>
    <div class="col-md-12">
        Endereço: <input type="text" name="endereco" value="<?=($endereco)?>" class="form-control">
    </div>
    <div class="col-md-12">
        Serviços a serem realizados: <textarea name="servicos" class="form-control" placeholder="Trabalhos a serem realizados" value="<?=($servicos)?>"><?=($servicos)?></textarea>
        <label></label>
    </div>
    <div class="col-md-12">
        Materiais: <textarea name="materiais" class="form-control" value="<?=($materiais)?>"><?=($materiais)?></textarea>
        <label></label>
    </div>
    <div class="col-md-6">
        Valor mão de obra: <input type="text" name="valor_mao_de_obra" value="<?=($valor_mao_de_obra)?>" class="form-control">
    </div>
    <div class="col-md-6">
        Valor dos materiais: <input type="text" name="valor_materiais" value="<?=($valor_materiais)?>" class="form-control">
    </div>
    <div class="col-md-12">
        Tempo previsto para finalização da obra: <input type="text" name="tempo_previsto" value="<?=($tempo_previsto)?>" class="form-control">
    </div>
    

    <br>
    
    <button class="btn btn-info" type="submit">SALVAR ORÇAMENTO</button>
    <a href="admin.php" class="btn btn-info col-md-1    ">Voltar</a>
</form>

<?php 
mysqli_close($conexao);
include "rodape.php" ;
?>