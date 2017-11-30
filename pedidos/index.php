<?php
    require_once('functionspedidos.php');
    indexpedidos();
?>

<?php include('modalpedidos.php'); ?>
<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Pedidos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="addpedidos.php"><i class="fa fa-plus"></i> Novo Pedido</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>Codigo</th>
		<th width="30%">NomeProduto</th>
		<th>Preço Total</th>
        <th>Quantidade</th>
		<th>Cliente</th>
	</tr>
			</thead>
					<tbody>
					<?php
					require_once '../_dao/daoseguranca.php';
					$vetor = PedidosExistentes();
					$tamanho = count($vetor);
		            if($tamanho > 0){
		                for($i =0; $i<$tamanho; $i++){
		                    echo"<tr><td>" . $vetor[$i]['ID_PEDIDO']  . "</td>";
		                    echo"<td>" .     $vetor[$i]['NOME_PROD'] . "</td>";
		                    echo"<td>" .     $vetor[$i]['PRECO'] . "</td>";
		                    echo"<td>" .     $vetor[$i]['QUANT'] . "</td>";
		                    echo"<td>" .     $vetor[$i]['NOME_CLI'] . "</td>";
		                    
		                }
		            } 
					  ?>
					</tbody>
			</table>

<?php include(FOOTER_TEMPLATE); ?>

		
<?php 
                
                   
                  
                ?>
            </tbody>
            <?php
               