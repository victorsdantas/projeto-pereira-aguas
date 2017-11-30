<?php 
  require_once('functions.php'); 
  edit();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">

    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="customer['nome']" required="required" value="<?php echo $customer['nome']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Apelido</label>
      <input type="text" class="form-control" name="customer['apelido']" required="required" value="<?php echo $customer['apelido']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="customer['telefone']" required="required" value="<?php echo $customer['telefone']; ?>">
    </div>

  </div>
  
  <div class="row">
    <div class="form-group col-md-7">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="customer['endereco']" required="required" value="<?php echo $customer['endereco']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="customer['bairro']" required="required" value="<?php echo $customer['bairro']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Número da residência</label>
      <input type="text" class="form-control" name="customer['numeroresidencia']" required="required" value="<?php echo $customer['numeroresidencia']; ?>">
    </div>

  </div>
  
  <div class="row">
    
    <div class="form-group col-md-4">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="customer['cpf']" required="required" value="<?php echo $customer['cpf']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">RG</label>
      <input type="text" class="form-control" name="customer['rg']" required="required" value="<?php echo $customer['rg']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="customer['dataCadastro']" disabled value="<?php echo $customer['dataCadastro']; ?>">
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