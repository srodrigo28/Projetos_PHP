<h1>Dados limpados</h1>

<a href='./sec.php'>
    Alterar a Sessão
</a>

<?php
session_start();
session_destroy();
header('Location: sec.php');