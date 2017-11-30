
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>
<h1>Painel de Controle</h1>
<hr />

<?php if ($db) : ?>

<div class="row">

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="customers" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Clientes</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="fornecedores" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-truck fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Fornecedores</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="produtos" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-tags fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Produtos</p>
				</div>
			</div>
		</a>
	</div>
        
        <div class="col-xs-6 col-sm-3 col-md-2">
		<a href="pedidos" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-shopping-cart fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Pedidos</p>
				</div>
			</div>
		</a>
	</div>

</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>