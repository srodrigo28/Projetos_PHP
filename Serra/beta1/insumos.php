<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Sistema Controle</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conteudo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
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
    <?php require_once ("menu.php");?>
</div>
 <section>
  <div class="container">
      <h1>Insumos</h1>
    <form>
        <div class="card" style="padding:10px">
        <h4 class="card-header">Cadastro Insumos</h4>
        <br>
        <div class="form-row">
            
            <div class="form-group col-md-4">
                <input type="text" class="form-control" 
                name="codigo" placeholder="Código" readonly />
            </div>
            
            <div class="form-group col-md-8">
				<select class="form-control">
					<option>Vale Goias</option>
					<option>União Minas</option>
					<option>DF Sul America</option>
					<option>TO Norte</option>
				</select>
			</div>

            <div class="form-group col-md-6">
				<select class="form-control">
					<option>Alcool</option>
					<option>Gasolina</option>
					<option>Diesel</option>
					<option>Graxa</option>
				</select>
			</div>

            <div class="form-group col-md-2">
                <input type="text" class="form-control" 
                name="responsavel" placeholder="Valor Unid"  />
            </div>
            
            <div class="form-group col-md-2">
                <input type="text" class="form-control" 
                name="codigo" placeholder="Litros"  />
            </div>
            
            <div class="form-group col-md-2">
                <input type="text" class="form-control" 
                name="text" placeholder="Valor Total"  />
            </div>

            </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary" style="width:100px; font-weight: 700;">Cadastrar</button>
        <button type="submit" class="btn btn-danger"  style="width:100px; font-weight: 700;">Voltar</button>
    </form>
    </div>
 </section>

  </body>
</html>
