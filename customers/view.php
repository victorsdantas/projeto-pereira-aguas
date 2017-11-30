<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $customer['nome']; ?></dd>

	<dt>Apelido:</dt>
	<dd><?php echo $customer['apelido']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $customer['cpf']; ?></dd>

	<dt>RG:</dt>
	<dd><?php echo $customer['rg']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $customer['endereco']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $customer['bairro']; ?></dd>

	<dt>Número da residência:</dt>
	<dd><?php echo $customer['numeroresidencia']; ?></dd>

</dl>

<dl class="dl-horizontal">
	<dt>Data de Cadastro:</dt>
	<dd><?php echo $customer['dataCadastro']; ?></dd>
	
	<dt>Telefone:</dt>
	<dd><?php echo $customer['telefone']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>