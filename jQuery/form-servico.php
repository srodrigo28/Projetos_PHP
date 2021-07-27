<form action="#" id="form2">
    <div class="form-row" >
        <label>Serviço:</label>        
        <button class="btn b1 btn-primary" id="add" >+</button>
    </div>
</form>

<style>
    label{margin: 10px;}
    .input-02{ margin-left: 75px;}
    .iput1{margin-right: 10px; margin-top: 7px; }
    .b1{width: 50px !important; margin-top: 7px; }
</style>

<script>
    //Adicionar
    $("#add").click(function(){ // Link :: https://www.youtube.com/watch?v=aWdRpLEqwkI&feature=youtu.be
        $("#form2").append(' <div class="form-row input-02" > <input type="text" class="iput1"> <label>Valor:</label> <input type="text" class="iput1">  <button class="btn b1 btn-danger" id="" >-</button> </div> ');
    });

    //Remover
    $("#remove").click(function(){ 
        $('input').toggleClass();
    });
    // HTML, CSS, Bootstrap, Jquery, PHP
</script>
