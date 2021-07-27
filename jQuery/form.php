<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-sm-2">
            <label>Preço</label>
            <input type="text" class="form-control" id="precoC">
        </div>
        <div class="form-group col-sm-2">
            <label>Média Carro</label>
            <input type="text" class="form-control" id="kmM">
        </div>
        <div class="form-group col-sm-2">
            <label>Valor Abastecer</label>
            <input type="text" class="form-control" id="vlAb">
        </div>
        <div class="form-group col-sm-2">
            <label>Total em Litros</label>
            <input type="text" class="form-control" id="lt" readonly >
        </div>
        <div class="form-group col-sm-2">
            <label>Total a Pagar</label>
            <input type="text" class="form-control" id="pagar" readonly >
        </div>
    </div>
    <button class="btn btn-primary">Calcular</button>
    <input type="reset" class="btn btn-danger" value="Limpar">
</form>