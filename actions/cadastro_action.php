<?php

require_once ('../config/db.php');



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare ("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt ->execute([$nome, $email, $senha]);
        header("location: ../login.php?cadastro=sucesso"); 
        exit;
    } catch (PDOException $e) {
        header("Location: ../cadastro.php?erro=" . urldecode($e->getMessage()));
        exit;
        
    }
}



?>