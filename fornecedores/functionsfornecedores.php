<?php

require_once('../config.php');
require_once(DBAPI);

$fornecedores = null;
$fornecedor = null;

/**
 *  Listagem de Fornecedor
 */
function indexfornecedores() {
	global $fornecedores;
	$fornecedores = find_all('fornecedores');
}

/**
 *  Cadastro de Fornecedor
 */
 function addfornecedores() {
	
	  if (!empty($_POST['fornecedor'])) {
		
		$today = 
		  date_create('now', new DateTimeZone('America/Sao_Paulo'));
	
		$fornecedor = $_POST['fornecedor'];
		$fornecedor['dataAtualizacao'] = $fornecedor['dataCadastro'] = $today->format("Y-m-d H:i:s");
		
		save('fornecedores', $fornecedor);
		header('location: index.php');
	  }
}

/**
 *	Atualizacao/Edicao de Fornecedor 
 */
 function editfornecedores() {
	
	  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	
	  if (isset($_GET['id'])) {
	
		$id = $_GET['id'];
	
		if (isset($_POST['fornecedor'])) {
	
		  $fornecedor = $_POST['fornecedor'];
		  $fornecedor['dataAtualizacao'] = $now->format("Y-m-d H:i:s");
	
		  update('fornecedores', $id, $fornecedor);
		  header('location: index.php');
		} else {
	
		  global $fornecedor;
		  $fornecedor = find('fornecedores', $id);
		} 
	  } else {
		header('location: index.php');
	  }
}


/**
 *  Visualização de um Fornecedor 
 */
 function viewfornecedores($id = null) {
  global $fornecedor;
  $fornecedor = find('fornecedores', $id);
}

/**
 *  Exclusão de um Fornecedor 
 */
 function deletefornecedores($id = null) {
	
		global $fornecedor;
		$fornecedor = remove('fornecedores', $id);
	
		header('location: index.php');
}