<?php 
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "aglm4114";
    $dbname = "dbname";

    $conexao=mysqli_connect($servidor,$usuario, $senha, $dbname);

    if(!$conexao){
        die("Houve um erro".mysqli_connect_errno());
    };

    function voltar(){
        return ("index.html");
    }
?>