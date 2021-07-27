<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--  CDN ON-LINE
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    -->
    <link rel="stylesheet" href="recursos/css/bootstrap.css">
    <link rel="stylesheet" href="recursos/css/app.css"/>
    <script src="recursos/js/jQuery.js"></script>
    <script src="recursos/js/js-mask.js"></script>
    <script src="recursos/js/mask.js"></script>

    <title> Titulo :: Revisão </title>
</head>
<body>
    <div class="container">

    <form action="#">
        <input type="text" class="cnpj" id="">
    </form>
    <script>
        $(document).ready(function(){
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('0000-0000');
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('.phone_us').mask('(000) 000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.cpf').append();
        $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
        $('.money2').mask("#.##0,00", {reverse: true});
        $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/, optional: true
                }
            }
        });
        $('.ip_address').mask('099.099.099.099');
        $('.percent').mask('##0,00%', {reverse: true});
        $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
        $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
        $('.fallback').mask("00r00r0000", {
            translation: {
                'r': {
                pattern: /[\/]/,
                fallback: '/'
                },
                placeholder: "__/__/____"
            }
            });
        $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
        });
    </script>

        <!--
        <div class="form">
            <h1>Controle de Serviços</h1>
            <?php  //require('form-servico.php');  ?>
        </div>

        <div class="form">
            <h1>Produto</h1>
            <?php  //require('form-produto.php');  ?>
        </div>
        -->

    </div>
    <script>
        </script>
        <script>
            $('.btn').addClass('btn btn-success') // adiciona uma classe
            $('.btn').removeClass('btn-success') // remove uma classe
            
            $('.form').hide() // evento para esconder o elemento
            $('.form').show() // evento para mostar o elemento
            
            $('form :text').hide() //evento esconder os campos com filtro text
            $('form :text').show() //evento mostrar os campos text
        </script>
        <script>

        </script>
</body>
</html>