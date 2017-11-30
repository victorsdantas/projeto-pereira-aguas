<?php

require_once('../config.php');
require_once(DBAPI);

$produtos = null;
$produto = null;

/**
 *  Listagem de Produtos
 */
function indexprodutos() {
	global $produtos;
	$produtos = find_all('produtos');
}

/**
 *  Cadastro de Produto
 */
 function addprodutos() {
	
	  if (!empty($_POST['produto'])) {
		
		$today = 
		  date_create('now', new DateTimeZone('America/Sao_Paulo'));
	
		$produto = $_POST['produto'];
		$produto['dataAtualizacao'] = $produto['dataCadastro'] = $today->format("Y-m-d H:i:s");
		
		save('produtos', $produto);
		header('location: index.php');
	  }
}

/**
 *	Atualizacao/Edicao de Produto 
 */
 function editprodutos() {
	
	  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	
	  if (isset($_GET['id'])) {
	
		$id = $_GET['id'];
	
		if (isset($_POST['produto'])) {
	
		  $produto = $_POST['produto'];
		  $produto['dataAtualizacao'] = $now->format("Y-m-d H:i:s");
	
		  update('produtos', $id, $produto);
		  header('location: index.php');
		} else {
	
		  global $produto;
		  $produto = find('produtos', $id);
		} 
	  } else {
		header('location: index.php');
	  }
}


/**
 *  Visualização de um Produto 
 */
 function viewprodutos($id = null) {
  global $produto;
  $produto = find('produtos', $id);
}

/**
 *  Exclusão de um Produto 
 */
 function deleteprodutos($id = null) {
	
		global $produto;
		$produto = remove('produtos', $id);
	
		header('location: index.php');
}