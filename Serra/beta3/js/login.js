$(function() {
    $("#form-cadastro").validate({       
        rules : {
            nome: {
                required : true
            },
            login: {
                required : true
            },
            senha: {
                required : true,
            },
            confirmarSenha: {
                required : true,
                minlength : 6,
                equalTo : "#senha"
            }
        },
        messagens : {
            nome : {
                required : "Por favor, informe seu nome."
            },
            login : {
                required : "Por favor, informe um login."
            },
            senha : {
                required : "Por favor, informe uma senha.",
                minlength : "A senha deve ser minimo 6 letras"
            },
            confirmarSenha : {
                required : "Por favor, Confirme a senha.",
                minlength : "A senha deve ser minimo 6 letras",
                equalTo : "A confirmação deve ser igual à senha"
            }
        }
    });
});