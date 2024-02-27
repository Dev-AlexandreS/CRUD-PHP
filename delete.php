<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da exclusão</title>
    <link rel="stylesheet" href="..\desafios\d001\style.css">
</head>
<body>
    <main>
<?php 
    include("conexao.php");

    $id = $_POST["n"];

    $sql = "DELETE FROM usuarios WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<h1>Cliente excluido com sucesso</h1>";
        echo "<button onclick='javascript:history.go(-1)'>Voltar</button>";
    }
    else{
       echo "<h1>Cliente não excluido</h1>". mysqli_error(($conexao));
    };
?>
   </main> 
</body>
</html>