<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/cadastro.css" media="screen" />
</head>
<body>

<div id="id01" class="modal">
  
<form class="modal-content animate" action="#" method="post"> <!--Envia pag-->
<h1>Cadastro</h1>
    <!--Area da logo Inicio
      <div class="imgcontainer"> 
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="assets/img/key.png" alt="Avatar" class="avatar">
      </div> 
    -->
    <div class="container"> <!-- Recebe os iputs-->
      <div id="cadastro-inputs">
                  
          <label><b>Maquina</b></label>
          <select>
            <option>Caminhão</option>
            <option>Trator</option>
            <option>Carro</option>
          </select>

          <label><b>Placa / Codigo</b></label>
          <input type="text" placeholder="NKN-4885" name="uname" required>

          <label><b>Insumo</b></label>
          <select>
            <option>Gasolina</option>
            <option>Disel</option>
            <option>Graxa</option>
          </select>

        <label for="uname"><b>Possivel Operador / Dono:</b></label> <!--Recebe input 2-->
        <input type="text" placeholder="Enter Username" name="uname" required> 
      </div>

    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  class="btn cancelbtn">Cancelar</button>
      <button type="button"  class="btn cancelbtnCad">Cadastrar</button>
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
</script>

<script language="JavaScript">
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