<?php
include 'conexao.php';
include 'usuario.php';

if (($_SERVER["REQUEST_METHOD"]=="POST")){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
//conexão com o banco de dados;
    $usuario = new Usuario($conn);
//cadastrar o usuário
    if ($usuario->cadastrar($nome,$email,$senha)){
    // Redirecionar para a página de sucesso após o cadastro
        header("Location: cadastrar-usuario-sucesso.php");
        exit();
    }else{
        echo "erro! tente novamente!";
    }else{
        header("Location: cadastrar-uauario.php?erro=1")
    }
}
?>