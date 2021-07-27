<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Sistema Controle</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conteudo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <script src="js/cep.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Beta :: V1</header>
  <?php require_once ("menu.php"); ?>
</div>
 <section>
   <div class="container">
	<br><br><br>
   <!------------------------------ Form Prestador  ---------------------------->
    <form action="core/inserir.php" method="post">
      <div class="card" style="padding:10px">
          <h4 class="card-header">Funcionário / Prestador</h4>
          <br>
          <div class="form-row">
            <div class="form-group col-md-4">
				<input type="number" class="form-control" 
				name="codigo" placeholder="Código" readonly>
			</div>
            <div class="form-group col-md-8">
				<input type="text" class="form-control" 
				name="obra" placeholder="Sebastião Rodrigo Nascimento Sousa">
            </div>
			<div class="form-group col-md-6">
				<input type="text" class="form-control" 
				name="cnpj" placeholder="24.979.512/0001-99">
            </div>
             <div class="form-group col-md-6">
				<select class="form-control">
					<option>Engenheiro</option>
					<option>Motorista</option>
					<option>Servente</option>
					<option>Terceiro</option>
				</select>
			</div>
          </div>
        </div>
        <br>
        <div class="card" style="padding:10px">
          <h4 class="card-header">Contato</h4>
          <br>
          <!------------------------------ Form Contato  ---------------------------->
          <div class="form-row">
            <div class="form-group col-md-4">
                <input type="tel" class="form-control" 
                name="tel" placeholder="(62) 98592-1140" >
              </div>
            <div class="form-group col-md-8">
                <input type="email" class="form-control" 
                name="email" placeholder="exemplo@gmail.com">
            </div>
              <div class="form-group col-md-4">
				<input type="text" class="form-control" 
				name="cep" placeholder="CEP" onblur="getDadosEnderecoPorCEP(this.value)"/>
            </div>
              <div class="form-group col-md-8">
				<input type="text" class="form-control" 
				name="complem" placeholder="Quadra 18A, Lote 27, N. 500" />
            </div>
            <div class="form-group col-md-4">
				<input type="text" class="form-control" 
				name="endereco" placeholder="Endereço" readonly id="endereco" />
            </div>
            <div class="form-group col-md-8">
				<input type="text" class="form-control" 
				name="bairro" placeholder="Bairro" readonly id="bairro" />
            </div>
            <div class="form-group col-md-4">
				<input type="text" class="form-control" 
				name="cidade" placeholder="Cidade" readonly id="cidade" />
            </div>
            <div class="form-group col-md-8">
				<input type="text" class="form-control" 
				name="uf" placeholder="UF" readonly id="uf" />
            </div>
          </div>
        </div>
        <br>
		<button class="btn btn-primary"  style="width:100px; font-weight: 700;">Cadastrar</button>
        <a href="obra-listar.php" class="btn btn-success"  style="width:100px; font-weight: 700;">Listar</a>
        <a href="index.php" class="btn btn-danger"  style="width:100px; font-weight: 700;">Voltar</a>
    </form>
    </div>
 </section>
  </body>
</html>