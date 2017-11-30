<?php

require_once('../config.php');
require_once(DBAPI);

$pedidos = null;
$pedido = null;

/**
 *  Listagem de Produtos
 */
function indexpedidos() {
	global $pedidos;
	$pedidos = find_all('pedidos');
}

/**
 *  Cadastro de Produto
 */
 function addpedidos() {
	
	  if (!empty($_POST['pedido'])) {	
	
		$pedido = $_POST['pedido'];
		
		save('pedidos', $pedido);
		header('location: index.php');
	  }
}

/**
 *	Atualizacao/Edicao de Produto 
 */
 /**
 *  Visualização de um Produto 
 */
 function viewpedidos($id = null) {
  global $pedido;
  $pedido = find('pedidos', $id);
}

/**
 *  Exclusão de um Produto 
 */
 function deletepedidos($id = null) {
	
		global $pedido;
		$pedido = remove('pedidos', $id);
	
		header('location: index.php');
}