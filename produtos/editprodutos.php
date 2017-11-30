<?php 
  require_once('functionsprodutos.php'); 
  editprodutos();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Produto</h2>

<form action="editprodutos.php?id=<?php echo $produto['id']; ?>" method="post">
  <hr />
  <div class="row">

    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="produto['nome']" required="required" value="<?php echo $produto['nome']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Preco</label>
      <input type="text" class="form-control" name="produto['preco']" required="required" value="<?php echo $produto['preco']; ?>">
    </div>
      
    <div class="form-group col-md-2">
      <label for="campo3">Quantidade</label>
      <input type="text" class="form-control" name="produto['quantidade']" required="required" value="<?php echo $produto['quantidade']; ?>">
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>