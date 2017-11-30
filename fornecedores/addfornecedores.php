<?php 
  require_once('functionsfornecedores.php'); 
  addfornecedores();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Fornecedor</h2>

<form action="addfornecedores.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">

    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="fornecedor['nome']" required="required">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="fornecedor['telefone']" required="required">
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