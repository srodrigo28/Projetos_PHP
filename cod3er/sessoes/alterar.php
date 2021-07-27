<h1>Alterar Sessões</h1>

<?php
session_start();
print_r($_SESSION);
echo "<hr>";
?>
<p>
    <strong>Nome: </strong> <?= $_SESSION['nome'] ?><br>
    <strong>Email: </strong> <?= $_SESSION['email'] ?><br>
</p>

<?php
    $_SESSION['email'] = 'rodrigo@gmail.com';
?>
    <a href='./sec.php'>
            Voltar
    </a>