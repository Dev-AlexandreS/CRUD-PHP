<?php 
    include("conexao.php");

    $nome = $_POST["n"];
    $email = $_POST["email"];
    $senha = $_POST["s"];

    $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if(mysqli_query($conexao, $query)){
        echo"<h1> Cadastro realizado com sucesso</h1>";
        
    }else{
        echo"Error:".$sql."<br>".mysqli_error($conexao);
    }
?>