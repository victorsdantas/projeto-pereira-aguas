<?php
require_once '../_dao/daoseguranca.php';

if (isset($_POST['logar'])) {

    startLogin(htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'), htmlspecialchars($_POST['senha'], ENT_QUOTES, 'UTF-8'));
}
?>

<html>
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PereiraAguas - Login</title>

        <link href="../js/_bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../js/_bootstrap-3.3.7-dist/css/loginInicio.css" rel="stylesheet">
        <link href="loginInicio.css" rel="stylesheet">

        <!-- CSS para o botão do tipo file ficar bonito -->
        <link rel="stylesheet" href="../js/_jQuery v3.1.0/jquery.fileupload.css">
        <link rel="stylesheet" href="../js/_jQuery v3.1.0/jquery.fileupload-ui.css">
        

        <script src="../js/_jQuery v3.1.0/jQuery v3.1.0.js"></script>
        <script src="../js/_bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="../js/_bootboxjs/bootbox.min.js"></script> 

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="login">
                                <img class="profile-img" src="../_img/logo.jpg"
                                     alt="">
                                <form class="form-signin" action="" method="post">
                                    <input type="email" name="email" class="form-control"   placeholder="Email" required autofocus>
                                    <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                                    <input type="submit" name="logar" class="btn btn-lg btn-color btn-block" value="Entrar" />
                                </form>
                                
                            </div>
                            <div class="tab-pane" id="lembrar">
                                <div id="tabs" data-tabs="tabs">
                                    <p class="text-center"><a href="#login" data-toggle="tab">Voltar</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

