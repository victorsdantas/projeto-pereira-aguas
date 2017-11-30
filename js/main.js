/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget);
    var id = button.data('customer');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Cliente #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
});

$('#delete-modal-fornecedor').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget);
    var id = button.data('fornecedor');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Fornecedor #' + id);
    modal.find('#confirm').attr('href', 'deletefornecedores.php?id=' + id);
});

$('#delete-modal-produto').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget);
    var id = button.data('produto');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Produto #' + id);
    modal.find('#confirm').attr('href', 'deleteprodutos.php?id=' + id);
});

$('#delete-modal-pedido').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget);
    var id = button.data('pedido');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Pedido #' + id);
    modal.find('#confirm').attr('href', 'deletepedidos.php?id=' + id);
});