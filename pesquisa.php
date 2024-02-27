<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da busca</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <?php 
            include("conexao.php");

            $pesquisa = $_POST["ask"];

            $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$pesquisa%'";
            
            $resultado = mysqli_query($conexao, $sql);
        
            if(mysqli_num_rows($resultado)){
                echo "<table class='table'>
                            <tr>
                                <th>id</th>
                                <th>nome</th>
                                <th>email</th>
                                <th>senha</th>
                            </tr>";
                while($row=mysqli_fetch_assoc($resultado)){
                    echo "<tr><td>". $row['id']."</td>";
                    echo "<td>". $row['nome']."</td>";
                    echo "<td>". $row['email']."</td>";
                    echo "<td>". $row['senha']."</td></tr>";
                }
                echo"</table>";
            }
            else{
                echo "zero resultados";
            };
            mysqli_close($conexao)
        ?>
    </main>
</body>
</html>