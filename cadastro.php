<?php
include 'templates/header.php';
?>

<h2>Cadastro de Usuario</h2>

<form action="actions/cadastro_action.php" method="POST">
    <input type="text" name="nome" placeholder="Nome Completo" required><br>
    <input type="text" name="email" placeholder="Email" required><br>
    <input type="password" name="senha" placeholder="Senha" required><br>
    <button type="submit">Cadastrar</button>
</form>

<p><a> <href="login.php">Já tem conta? Faça login</a></p>

<?php include 'templates/footer.php' ?>

   