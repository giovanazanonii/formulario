<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
    <link rel="stylesheet" href="css/deleta_armario.css">
</head>
<body>
    <div class="container">
        <?php
        include('conexao.php');

        if (isset($_GET['id_armario'])) {
            $id_armario = $_GET['id_armario'];

            $sql = "DELETE FROM armarios WHERE id_armario = $id_armario";

            if (mysqli_query($id, $sql)) {
                echo "<p class='message success'>Armário excluído com sucesso.</p>";
            } else {
                echo "<p class='message error'>Erro ao excluir o armário: ".mysqli_error($id)."</p>";
            }
        } else {
            echo "<p class='message error'>ID do armário não fornecido.</p>";
        }
        ?>
    </div> 
</body>
</html>

