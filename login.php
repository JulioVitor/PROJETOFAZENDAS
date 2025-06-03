<?php

include_once 'templates/header.php';

if (isset($_GET['erro'])){
    echo "<p> style= 'color:red1'>".htmlspecialchars($_GET["erro"])."</p>";
}
?>

<form action="actions/login_action.php" method="POST">
    <label for="email">E-mail:</label>
    <input type="email" name="email" required></br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" required></br>

    <button type="submit">Entrar</button>
</form>

    