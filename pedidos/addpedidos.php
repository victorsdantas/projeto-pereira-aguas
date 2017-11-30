<?php 
  require_once('functionspedidos.php');
   require_once '../_dao/daoseguranca.php';
  addpedidos();
?>

<?php include(HEADER_TEMPLATE); 

if (isset($_POST['salvar'])) {

    salvarProduto(htmlspecialchars($_POST['id_prod'], ENT_QUOTES, 'UTF-8'), htmlspecialchars($_POST['quantidade'], ENT_QUOTES, 'UTF-8'), htmlspecialchars($_POST['id_cli'], ENT_QUOTES, 'UTF-8'));
}

?>



<h2>Novo Pedido</h2>

<form action="addpedidos.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">

    <div class="form-group col-md-5">
      <label for="name">Nome</label>
      <!-- <input type="text" class="form-control" name="produto['nome']" required="required"> -->
      <select name="id_prod" id="id_categoria" class="form-control select2" required="">
        <?php
            
            $vetor = ProdutosExistentes(); 
            $tamanho = count($vetor);
            for($i =0; $i<$tamanho;$i++){
            echo "<option value='".$vetor[$i]['ID']."'>".$vetor[$i]['NOME']." - R$ ".$vetor[$i]['PRECO']."</option>";

            }
            ?>
    </select>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Quantidade</label>
      <input type="text" class="form-control" name="quantidade" required="required">
    </div>

 

  
   <div class="form-group col-md-5">
      <label for="name">Cliente</label>
      <!-- <input type="text" class="form-control" name="produto['nome']" required="required"> -->
      <select name="id_cli" id="id_categoria" class="form-control select2" required="">
        <?php
            
            $vetor = ClientesExistentes(); 
            $tamanho = count($vetor);
            for($i =0; $i<$tamanho;$i++){
            echo "<option value='".$vetor[$i]['ID']."'>".$vetor[$i]['NOME']."</option>";

            }
            ?>
    </select>
    </div>
 </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" name='salvar' class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>