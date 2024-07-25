    <?php include "cabecalho.php"; ?>

    <?php include "conexao.php"; ?>

    <table class="table mt-3 border border-sucess">
        <thead>
            <tr>
                <th>Número</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from tb_orcamentos";
            $resultado = mysqli_query($conexao, $sql);
            while($umCliente = mysqli_fetch_assoc($resultado)):
            ?>
                <tr>
                    <td><?=$umCliente['id'];?></td>
                    <td><?=$umCliente['nome_cliente'];?></td>
                    <td><?=$umCliente['endereco'];?></td>
                    <td><?=$umCliente['telefone'];?></td>
                    <td>
                        <a class="btn btn-info" href="form-alterar.php?id=<?=($umCliente['id']); ?>">Editar</a>
                        <a class="btn btn-danger" href="excluir.php?id=<?=($umCliente['id']); ?>" onclick="return confirmarExclusao();">Excluir</a>
                        <a class="btn btn-primary" href="visualizar.php?id=<?=($umCliente['id']); ?>">Ver</a>
                    </td>
                </tr>
            <?php endwhile; 

            mysqli_close($conexao);
            ?>
        </tbody>
    </table>

    <a href="form-inserir.php" class="btn btn-info">NOVO ORÇAMENTO</a>   

    <?php include "rodape.php" ?>   

<script>
function confirmarExclusao() {
    if (confirm("Você tem certeza que deseja excluir este item?")) {
        return confirm("Tem certeza mesmo? Esta ação não pode ser desfeita.");
    }
    return false;
}
</script>