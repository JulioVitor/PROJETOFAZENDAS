<?php

session_start();
require_once("../config/db.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if($email && $senha){
        try{
            $stmt =$pdo->prepare("SELECT *FROM usuarios WHERE email =?");
            $stmt -> execute([$email]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario && password_verify($senha, $usuario['senha'])){
                //login bem sucedido
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                header("Location: ../dashboard.php");
                exit;
            }else{
                header("Location: ../login.php?erro=Email ou senha invalidos.");
                exit;
            }
        }catch (PDOException $e) {
            header("Location: ../login.php?erro=" . urldecode($e->getMessage()));
            exit;
        }
    }else{
        header("Location: ../login.php?erro = Preencha todos os campos. ");
        exit;
    }
}
?>