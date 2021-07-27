<form action="#" id="form3">
    <div class="form-row" >
        <label>Produto:</label>
        <button class="btn b1 btn-primary" id="add-produto" >+</button>
    </div>
</form>
<style>
    label{margin: 10px; font-weight: 700}
    .form{margin-top: 50px;}
    .input-01{ margin-left: 80px;}
    .bloco{ margin-left: 20px; }
    .iput1{margin-right: 10px; margin-top: 7px; }
    .b1{width: 50px !important; margin-top: 7px; }
</style>
<script>
    //Adicionar
    $("#add-produto").click(function(){ // Link :: https://www.youtube.com/watch?v=aWdRpLEqwkI&feature=youtu.be
        $("#form3").append
        (' <div class="form-row input-01" > <input type="text" class="iput1"> <label>Valor:</label> <input type="text" class="iput1"> <label>Quantidade:</label> <input type="text" class="iput1"> <button class="btn b1 btn-danger" id="" >-</button> </div>  ');
    });
</script>