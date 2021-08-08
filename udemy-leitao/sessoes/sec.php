<?php
    session_start();
    print_r($_SESSION);
    echo '<br>';

    if(!$_SESSION['nome']){
        $_SESSION['nome'] = 'Gabriel';
    }
    if(!$_SESSION['email']){
        $_SESSION['email'] = 'email@email.com';
    }

    print_r($_SESSION);

    ?>
    <p>
        <a href='./alterar.php'>
            Alterar a Sessão
        </a>
    </p>
    <p>
        <a href='./sec_limpar.php'>
            Limpar a Sessão
        </a>
    </p>
