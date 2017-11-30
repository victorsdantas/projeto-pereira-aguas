<?php 
  require_once('functions.php'); 
  add();
  
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">

    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="customer['nome']" required="required">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Apelido</label>
      <input type="text" class="form-control" name="customer['apelido']" required="required">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="customer['telefone']" required="required">
    </div>

  </div>
  
  <div class="row">

    <div class="form-group col-md-7">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="customer['endereco']" required="required">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="customer['bairro']" required="required">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">Número da residência</label>
      <input type="text" class="form-control" name="customer['numeroresidencia']" required="required">
    </div>

  </div>
  
  <div class="row">

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="customer['cpf']" required="required">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">RG</label>
      <input type="text" class="form-control" name="customer['rg']" required="required">
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