function confirmarExclusao() {
    if (confirm("Você tem certeza que deseja excluir este item?")) {
        return confirm("Tem certeza mesmo? Esta ação não pode ser desfeita.");
    }
    return false;
}

function calculateCost() {
    const altura = parseFloat(document.getElementById('altura').value) || 0;
    const largura = parseFloat(document.getElementById('largura').value) || 0;
    const valorMetro = parseFloat(document.getElementById('valor_metro').value) || 0;

    const area = altura * largura;
    const custoTotal = area * valorMetro;

    document.getElementById('resultado').value = custoTotal.toFixed(2);
}