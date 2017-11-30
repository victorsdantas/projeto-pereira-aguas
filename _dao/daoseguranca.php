<?php

require_once "conection.php";


function startLogin($login, $senha) {

// session_start inicia a sessão
   // session_name(md5("seg" . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']));

  //  session_cache_expire(10);

    session_start();
// conectar com o bando de dados.
   $con = conexao();

// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
    $sql = "SELECT * FROM gerente WHERE email ='".$login."' AND senha = '" . $senha . "'";
    $result = $con->query($sql);


    /*
     * Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida,
     * ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, 
     * se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php 
     * ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login 
     */
    if ($result->num_rows > 0) {
        //Insere os campos do usuario do banco de dados com a variavel $row
        $row = $result->fetch_assoc();
        
        $_SESSION['email'] = $login;
        $_SESSION['senha'] = $senha; 
        header('location:../index.php');
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
        print("<h4 class='alert_error'>Erro ao se Logar.!</h4>");
    }
}

function ProdutosExistentes() {
    $conn = conexao();
    $result = mysqli_query($conn, "Select * from produtos");
    $i = 0;
    $simulados = array();
    if (mysqli_num_rows($result)) {
        while ($row = $result->fetch_assoc()) {
            $simulados[$i]['ID'] = $row['id'];
            $simulados[$i]['NOME'] = $row['nome'];
            $simulados[$i]['PRECO'] = $row['preco'];
            $i++;
        }
    }
    return $simulados;
}

function ClientesExistentes() {
    $conn = conexao();
    $result = mysqli_query($conn, "Select * from customers");
    $i = 0;
    $simulados = array();
    if (mysqli_num_rows($result)) {
        while ($row = $result->fetch_assoc()) {
            $simulados[$i]['ID'] = $row['id'];
            $simulados[$i]['NOME'] = $row['nome'];
            $i++;
        }
    }
    return $simulados;
}

function verificarLogin() {

    //session_start();

    if (isset($_SESSION['email']) and isset($_SESSION['senha'])) {
        
        return true;
        
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
        header('location: ./_login/loginInicio.php');
    }
}

function salvarProduto($idprod, $quantidade, $idCliente){
    $con = conexao();
    $result = mysqli_query($con, "Select * from produtos WHERE id=".$idprod);
    while ($row = $result->fetch_assoc()) {
            $nomeProd = $row['nome'];
            $preco = $row['preco'];
            
        }

    $result2 = mysqli_query($con, "Select * from customers WHERE id=".$idCliente);  
    while ($row1 = $result2->fetch_assoc()) {
            $nomeCli = $row1['nome'];
            
        } 
            $precoTotal = $quantidade * $preco; 

     $sql = "INSERT INTO pedidos (idProduto, idCliente, preco, nomeProduto, quantidade, nomeCliente,dataCompra) VALUES
     (".$idprod.", ".$idCliente.", ".$precoTotal.",'".$nomeProd."',".$quantidade.",'".$nomeCli."','".date('y.m.d')."')";
     if($con->query($sql)){
        echo "CADASTRO REALIZADO COM SUCESSO";
     }else{
        echo "Erro";
     }

}

function PedidosExistentes() {
    $conn = conexao();
    $result = mysqli_query($conn, "Select * from pedidos");
    $i = 0;
    $simulados = array();
    if (mysqli_num_rows($result)) {
        while ($row = $result->fetch_assoc()) {
            $simulados[$i]['ID_PEDIDO'] = $row['idPedidos'];
            $simulados[$i]['NOME_PROD'] = $row['nomeProduto'];
            $simulados[$i]['QUANT'] = $row['quantidade'];
            $simulados[$i]['PRECO'] = $row['preco'];
            $simulados[$i]['NOME_CLI'] = $row['nomeCliente'];
            $i++;
        }
    }
    return $simulados;
}


?>
