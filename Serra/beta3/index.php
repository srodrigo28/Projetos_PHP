<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/brazil.js"></script>
    <title>Login :: Serra</title>
</head>
<body> 
<div id="form-container">
     <div class="panel" id="form-box" method="post">
        <form action="#" id="register">
            <h1 class="text-center">Login App Serra</h1>
            <div class="form-group">
                <label class="sr-only" for="login">Usuário</label>
                <div class="input-group">
                   <input type="text" name="usuario" id="nome" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="senha">Senha</label>
                <div class="input-group">
                    <input type="password" name="pass" id="senha" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <button onclick="lg()" class="btn btn-success form-control">Entrar</button>
             </div>
             <div class="form-group">
                Não é registrado? <a href="cadastro.php">Crie uma conta</a>.
            </div>
        </form>
    </div>
 </div>
 <script src="js/login-valida.js"></script>
</body>
</html>