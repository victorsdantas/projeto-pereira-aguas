<?php

  require_once('functionspedidos.php'); 

  if (isset($_GET['id'])){
    deletepedidos($_GET['id']);
  } else {
    die("ERRO: ID não definido.");
  }

?>

