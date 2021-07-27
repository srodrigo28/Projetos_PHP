<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/brazil.js"></script>
    <title>Cadastro</title>
</head>
<body> 
<div id="form-container">
     <div class="panel" id="form-box">
        <form action="index.php" method="post" id="form-cadastro">
            <h1 class="text-center">Cadastre-se</h1>
            <div class="form-group">
                <div class="input-group">
                   <input type="text" name="usuario" class="form-control" placeholder="Seu nome" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="login" class="form-control" placeholder="Seu login de usuário" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                   <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required minlength="6">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="password" name="senha-conf" class="form-control" placeholder="Confirmef sua senha" required minlength="6">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar" id="btn-submit" class="btn btn-success form-control">
             </div>
             <div class="form-group">
                Já é registrado? <a href="index.php">Entrar na sua conta</a>.
            </div>
        </form>
    </div>
 </div>
</body>
</html>