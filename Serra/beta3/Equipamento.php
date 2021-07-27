<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/mobile.css">
</head>
<body>
<div class="wrapper">
    <div class="title">
      Equipamento :: Serra
    </div>
    <div class="form">
      <form action="core/inserir-equipamento.php" method="post">
            <div class="inputfield">
                <label>Descrição</label>
                <input type="text" class="input" name="equipamento">
            </div>

            <div class="inputfield">
                <label>Capacidade</label>
                <input type="text" class="input" name="capacidade">
            </div>

            <div class="inputfield">
                <label>Proprietário</label>
                <input type="text" class="input" name="proprietario">
            </div>

            <div class="inputfield">
                <label>Placa</label>
                <input type="text" class="input" name="placa">
            </div>

            <div class="inputfield">
                <label>Prefixo</label>
                <input type="text" class="input" name="prefixo">
            </div>

            <div class="inputfield">
                <label>Operador</label>
                <input type="text" class="input" name="operador">
            </div>
            <div class="inputfield">
              <label>Renumeração</label>
                <div class="custom_select">
                  <select name="pagar">
                    <option>Hora</option>
                    <option>Dia</option>
                    <option>Mês</option>
                    <option>m3 x km</option>
                  </select>
                </div>
            </div> 
          <div class="inputfield">
            <input type="submit" value="Register" class="btn">
          </div>  
      </form>
  </div>
</body>
</html>