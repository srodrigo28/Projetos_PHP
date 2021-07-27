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
      Abastece :: Serra
    </div>
    <div class="form">
      <form action="core/inserir-abastercer.php" method="post">
            <div class="inputfield">
              <label>Motorista</label>
                <div class="custom_select">
                  <select name="motorista">
                    <option>Aurelino</option>
                    <option>Bruno</option>
                    <option>Eliandro</option>
                    <option>Rodrigo</option>
                  </select>
                </div>
            </div>
            <div class="inputfield">
              <label>Abastecer</label>
                <div class="custom_select">
                  <select name="insumo">
                    <option>Gasolina</option>
                    <option>Diesel</option>
                    <option>Graxa</option>
                  </select>
                </div>
            </div> 
            <div class="inputfield">
                <label>Horimetro</label>
                <input type="text" class="input" name="orimetro">
            </div>
             
            <div class="inputfield">
                <label>Litros</label>
                <input type="text" class="input" name="litros">
            </div>
          <div class="inputfield">
            <input type="submit" value="Register" class="btn">
          </div>  
      </form>
  </div>
</body>
</html>