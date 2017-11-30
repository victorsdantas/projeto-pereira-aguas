<?php 
	require_once('functionspedidos.php'); 
	viewprodutos($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Produto <?php echo $pedido['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Codigo:</dt>
	<dd><?php echo $pedido['id']; ?></dd>
        
        <dt>Quantidade:</dt>
	<dd><?php echo $pedido['quantidade']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>