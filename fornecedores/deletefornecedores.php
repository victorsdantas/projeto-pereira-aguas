<?php

  require_once('functionsfornecedores.php'); 

  if (isset($_GET['id'])){
    deletefornecedores($_GET['id']);
  } else {
    die("ERRO: ID não definido.");
  }

?>