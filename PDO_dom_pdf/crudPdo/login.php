<?php require_once("conexao.php"); ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="estilo.css" rel="stylesheet" id="bootstrap-css">
<script src="script.js"></script>

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Registrar</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="autenticar.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="senha" id="password" tabindex="2" class="form-control" placeholder="Senha">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Lembrar-Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button type="submit" name="login-submit" class="form-control btn btn-login">Login</button>
												 
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Recuperar Senha?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="nome" id="username" tabindex="1" class="form-control" placeholder="Nome" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="senha" id="password" tabindex="2" class="form-control" placeholder="Senha">
									</div>
									<div class="form-group">
										<input type="password" name="confirmar-senha" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar Senha">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="registrar" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--CADASTRO DOS USUÁRIOS -->
<?php 
if(isset($_POST['registrar'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirmar_senha = $_POST['confirmar-senha'];

	if($senha == $confirmar_senha){

		//VERIFICAR SE EXISTE O EMAIL CADASTRADO NO BANCO DE DADOS
		$res = $conexao->query("SELECT * from usuarios where email = '$email'");
		$dados = $res->fetchAll(PDO::FETCH_ASSOC);
		$linhas = count($dados);

		if($linhas == 0){
			
			$res = $conexao->prepare("insert into usuarios (nome, email, senha, nivel) values (:nome, :email, :senha, :nivel)");

			$res->bindValue(":nome", $nome);
			$res->bindValue(":email", $email);
			$res->bindValue(":senha", $senha);
			$res->bindValue(":nivel", "Comum");
			$res->execute();

			echo "<script language='javascript'>window.alert('Usuário Cadastrado!'); </script>";
		}else{
			echo "<script language='javascript'>window.alert('Este usuário já está cadastrado!'); </script>";
		}
	}else{
		echo "<script language='javascript'>window.alert('As senhas são Diferentes!'); </script>";
	}
}


?>




