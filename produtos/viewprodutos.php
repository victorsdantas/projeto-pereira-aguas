<?php 
	require_once('functionsprodutos.php'); 
	viewprodutos($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Produto <?php echo $produto['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $produto['nome']; ?></dd>

	<dt>Preço:</dt>
	<dd>R$ <?php echo $produto['preco']; ?></dd>
        
        <dt>Quantidade:</dt>
	<dd><?php echo $produto['quantidade']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="editprodutos.php?id=<?php echo $produto['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>