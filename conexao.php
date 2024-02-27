<?php 
    $servidor = "bdctlfccwkg1cwlyi8od-mysql.services.clever-cloud.com";
    $usuario = "uen6lcjvv6uwjkjo";
    $senha = "E4V3wR0VD2isbOavwwNm";
    $dbname = "bdctlfccwkg1cwlyi8od";

    $conexao=mysqli_connect($servidor,$usuario, $senha, $dbname);

    if(!$conexao){
        die("Houve um erro".mysqli_connect_errno());
    };

    function voltar(){
        return ("index.html");
    }
?>
