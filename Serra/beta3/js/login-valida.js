$('#register :button').click(function(event){ /** Cancela o evento atualizar*/

    event.preventDefault();

})

function lg(){//Recebendo os dados

    var user  = document.getElementById('nome').value

    var senha = document.getElementById('senha').value

    if( user  == "" || senha == ""){

        alert("Insira os dados")

    }else if( user != "admin" || senha != "admin"){

        alert("Usuario ou Senha nao encontrados \n " + user)

    }else{

        var url = "inicio.php";

        $(window.document.location).attr('href', url);

    }

}