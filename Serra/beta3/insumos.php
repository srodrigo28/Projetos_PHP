<!DOCTYPE html>
<!-- Referencia Js ::  https://www.youtube.com/watch?v=EggHUEhCiz4   -->
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Sistema Controle</title>
    <link rel="stylesheet" href="css/conteudo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  </head>
  <body>
</div>
 <section>
  <div class="container">
      <h1>Insumos</h1>
    <form name="formulario">
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
                name="campo1" id="vl_unid" placeholder="Valor Unid"  />
            </div>
            <div class="form-group col-md-2">
                <input type="text" class="form-control" 
                name="campo2" id="qd" placeholder="Litros"
                onchange="calc2()"  />
            </div> 
            <div class="form-group col-md-2">
                <input type="text" class="form-control" name="vl_total"
                id="valorTotal"  onKeyPress="return(MascaraMoeda(this,'.',',',event))" placeholder="R$ "  />
            </div>
            </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary" style="width:100px; font-weight: 700;">Cadastrar</button>
        <button type="submit" class="btn btn-danger"  style="width:100px; font-weight: 700;">Voltar</button>
    </form>
    </div>
 </section>
        <script src="js/js-mask.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
