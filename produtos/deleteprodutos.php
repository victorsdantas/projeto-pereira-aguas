<?php

  require_once('functionsprodutos.php'); 

  if (isset($_GET['id'])){
    deleteprodutos($_GET['id']);
  } else {
    die("ERRO: ID não definido.");
  }

?>