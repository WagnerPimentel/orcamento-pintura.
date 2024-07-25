<?php include "cabecalho.php"; ?>

<br><h2 class="text-center">CADASTRAR UM NOVO ORÇAMENTO</h2>
<br>
<form class="row g-3 border border-sucess" method="post" action="salvar.php" enctype="multipart/form-data">
    <div class="col-md-6">
        <input type="text" name="nome_cliente" placeholder="Nome do cliente" class="form-control">
    </div>
    <div class="col-md-6">
        <input type="text" name="telefone" placeholder="Telefone" class="form-control">
    </div>
    <div class="col-md-12">
        <input type="text" name="endereco" placeholder="Endereço" class="form-control">
    </div>
    <div class="form-floating">
        <textarea name="servicos" class="form-control" placeholder="Trabalhos a serem realizados" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Trabalhos a serem realizados</label>
    </div>
    <div class="form-floating">
        <textarea name="materiais" class="form-control" placeholder="Materiais" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Materiais</label>
    </div>
    <div class="col-md-6">
        <input type="text" name="valor_mao_de_obra" placeholder="Valor da mão de obra" class="form-control">
    </div>
    <div class="col-md-6">
        <input type="text" name="valor_materiais" placeholder="Valor dos materiais" class="form-control">
    </div>
    <div class="col-md-12">
        <input type="text" name="tempo_previsto" placeholder="Tempo previsto para finalização da obra" class="form-control">
    </div>
    
    <br>

    <h3 class="text-center">Calculadora de Custo</h3>
<div class="row g-3">
    <div class="col-md-4">
        <input type="text" id="altura" placeholder="Altura (m)" class="form-control">
    </div>
    <div class="col-md-4">
        <input type="text" id="largura" placeholder="Largura (m)" class="form-control">
    </div>
    <div class="col-md-4">
        <input type="text" id="valor_metro" placeholder="Valor do metro" class="form-control">
    </div>
    <div class="col-md-12">
        <button type="button" class="btn btn-info" onclick="calculateCost()">Calcular Custo</button>
        <input type="text" id="resultado" placeholder="Custo Total" class="form-control" readonly>
    </div>
</div>
<br>
    
    <button class="btn btn-info" type="submit">SALVAR ORÇAMENTO</button>
    <a href="admin.php" class="btn btn-info col-md-1">Voltar</a>
</form>


<?php include "rodape.php"; ?>
