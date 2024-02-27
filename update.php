<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <h1>Atualizar dados</h1>
        <?php 
            include("conexao.php");


            $sql = "SELECT * FROM usuarios";
                
                
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
             
        ?>

    </main>
            <section>

                <h2>Digite os itens que deseja alterar</h2>
                <form action="nextupdate.php" method="post">
                    <label for="id">id</label>
                    <input type="number" name="id">

                    <label for="nome">nome</label>
                    <input type="text" name="nome">

                    <label for="email">email</label>
                    <input type="email" name="email">

                    <label for="senha">senha</label>
                    <input type="password" name="senha">

                    <input type="submit" value="Atualizar">
                </form>
                <button onclick="javascript:window.location.href='index.html'">Voltar</button>
            </section>

</body>
</html>