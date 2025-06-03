<?php

session_start();
if (!isset($_SESSION['usuario_id'])){
    header("Location: login.php");
    exit;
}
?>

<h1>Bem vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</h1>
<p>Você esta logado no sistema.</p>
<a href="logout.php">Sair</a>