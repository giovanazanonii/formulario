<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Cadastro</title>
  <link rel="stylesheet" type="text/css" href="css/cadastra_armario.css">
</head>
<body>
  <div class="container">
    <?php
    include('conexao.php');

    $setor = $_POST['setor'] ?? '';
    $codigo = $_POST['codigo'] ?? '';
    $tamanho = $_POST['tamanho'] ?? '';
    $preco = $_POST['preco'] ?? '';
    $status = $_POST['status'] ?? '';
    $observacao = $_POST['observacao'] ?? '';
    $data = $_POST['data'] ?? '';
    $fechadura = $_POST['fechadura'] ?? '';

    if (empty($setor) || empty($codigo) || empty($tamanho) || empty($preco) || empty($status) || empty($observacao) || empty($data) || empty($fechadura)) {
      echo "<div class='message error'>Por favor, preencha todos os campos.</div>";
    } else {
      $sql = "INSERT INTO armarios (setor, codigo, tamanho, preco, status, observacao, data, fechadura) 
              VALUES ('$setor', '$codigo', '$tamanho', '$preco', '$status', '$observacao', '$data', '$fechadura')";

      $res = mysqli_query($id, $sql);

      if ($res) {
        echo "<p class='message success'>Cadastro realizado com sucesso</p>";
      } else {
        echo "<p class='message error'>Erro ao cadastrar</p>";
      }
    }
    ?>
    <button onclick="window.location.href='index.html'">Voltar</button>
    <button onclick="window.location.href='lista_armario.php'">Lista de Armários</button>
  </div>
</body>
</html>
