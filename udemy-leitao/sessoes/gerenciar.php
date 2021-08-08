<h1>Gerenciando Sessões</h1>

<?php
session_start();
$id = session_id();
echo "<b>Token: </b> " . $id;
session_id('l0hgto20l9p8r5ahigi1uda8i0');


$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];