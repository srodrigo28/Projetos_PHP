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
  <?php require_once ("menu.php"); ?>
</div>
 <section>
   <div class="container">
   <h1>Cadastro de Obras</h1>
    <form action="core/inserir.php" method="post">
        <div class="form-group">
            <label>Código:</label>
            <input type="number" class="form-control" name="codigo"
            style="width:100px" disabled>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Obra:</label>
            <input type="text" class="form-control" name="obra" >
          </div>
          <div class="form-group col-md-6">
              <label>CNPJ:</label>
              <input type="text" class="form-control" name="cnpj" >
          </div>
          <div class="form-group col-md-6">
              <label>Endereço:</label>
              <input type="text" class="form-control" name="street" >
          </div>
          <div class="form-group col-md-6">
              <label>Cidade:</label>
              <input type="text" class="form-control" name="city" >
          </div>
          <div class="form-group col-md-12">
              <label>Responsável:</label>
              <input type="text" class="form-control" name="resp" >
          </div>
        </div>
        <button class="btn btn-success"  style="width:100px; font-weight: 700;">Listar</button>
        <button class="btn btn-primary"  style="width:100px; font-weight: 700;">Cadastrar</button>
        <button class="btn btn-danger"   style="width:100px; font-weight: 700;">Voltar</button>
    </form>
    </div>
 </section>
  </body>
</html>