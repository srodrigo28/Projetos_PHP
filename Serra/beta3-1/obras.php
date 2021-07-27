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
  <ul>
    <li><a href="https://projapp.com.br/app/beta1/index.php"><i class="fas fa-qrcode"></i>App Serra</a></li>
    <li><a href="https://projapp.com.br/app/beta1/obras.php"><i class="fas fa-link"></i>Obras</a></li>
    <li><a href="https://projapp.com.br/app/beta1/prestador.php"><i class="fas fa-stream"></i>Prestador</a></li>
    <li><a href="https://projapp.com.br/app/beta1/maquina.php"><i class="fas fa-stream"></i>Maquinas</a></li>
    <li><a href="https://projapp.com.br/app/beta1/insumos.php"><i class="fas fa-stream"></i>Insumos</a></li>
    <li><a href="https://projapp.com.br/app/qrcode/"><i class="fas fa-calendar-week"></i>QRCode</a></li>
    <li><a href="#"><i class="far fa-question-circle"></i>Listas</a></li>
    <li><a href="#"><i class="fas fa-sliders-h"></i>Backups</a></li>
  </ul>
</div>
 <section>
   <div class="container">
   <h1>Cadastro de Obras</h1>
<form>
    <div class="form-group">
        <label>Código:</label>
        <input type="number" class="form-control" name="codigo"
        style="width:100px" value="<?= $_POST['codigo'] ?>" />
    </div>
    <div class="form-group">
        <label>Obra:</label>
        <input type="text" class="form-control" name="obra"
        style="width:60%" value="<?= $_POST['obra'] ?>"/>
    </div>
    <div class="form-group">
        <label>CNPJ:</label>
        <input type="text" class="form-control" name="cnpj" 
        style="width:60%" value="<?= $_POST['cnpj'] ?>" />
    </div>
    <div class="form-group">
        <label>Endereço:</label>
        <input type="text" class="form-control" name="endereco" 
        style="width:60%" value="<?= $_POST['endereco'] ?>" />
    </div>
    <div class="form-group">
        <label>Responsável:</label>
        <input type="text" class="form-control" name="responsavel" 
        style="width:60%" value="<?= $_POST['responsavel'] ?>" />
    </div>
    <button type="submit" class="btn btn-primary" style="width:100px; font-weight: 700;">Cadastrar</button>
    <button type="submit" class="btn btn-danger"  style="width:100px; font-weight: 700;">Voltar</button>
</form>


    </div>


 </section>

  </body>
</html>
