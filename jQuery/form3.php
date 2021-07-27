

<select id="id_do_select" class="select-estados" data-placeholder='Nenhum valor selecionado...'>
    <option value="valor 1">Texto 1</option>
    <option value="valor 2">Texto 2</option>
    <option value="valor 3">Texto 3</option>
</select>

<script>
    // Link ref :: https://pt.stackoverflow.com/questions/106696/pegar-valor-do-select-com-jquery
$('.select-estados').change(function(event){
   var cidade = event.currentTarget.value;
   alert(cidade);
 });

</script>