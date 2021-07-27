<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/login.css" media="screen" />
</head>
<body>
<h2>Login :: </h2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
<div id="id01" class="modal">
  <form class="modal-content animate" action="cadastro.php" method="post"> <!--Envia pag-->
    <div class="imgcontainer"><!--Area da logo-->
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="assets/img/key.png" alt="Avatar" class="avatar">
    </div>
    <div class="container"> <!-- Recebe os iputs-->
      <div id="login-inputs">
        <label for="uname"><b>Usuário</b></label> <!--Recebe Usuário-->
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Senha</b></label> <!--Recebe a senha-->
        <input type="password" placeholder="Enter Password" name="psw" required> 
      </div>

      <button type="submit">Login</button>
      <label> <input type="checkbox" checked="checked" name="remember"> Ficar Locado </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Lembre-me <a href="#">minha senha?</a></span>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function Login(){
		var done=0;
		var usuario=document.login-inputs.uname.value;
		usuario=usuario.toLowerCase();
		var senha=document.login-inputs.pwd.value;
		seha=senha.toLowerCase();
		if (usuario=="admin" && senha=="admin") {
			window.location="/p/#"; done=1;
		}
		if (done==0) { alert("Dados incorretos, tente novamente"); }
	}
</script>
</body>
</html>