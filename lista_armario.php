<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARMÁRIOS</title>
  <link rel="stylesheet" type="text/css" href="css/lista_armario.css">
</head>
<body>
  <table border="1">
    <tr>
      <th>Id armário</th>
      <th>Setor</th>
      <th>Código</th>
      <th>Tamanho</th>
      <th>Preço</th>
      <th>Status</th>
      <th>Observação</th>
      <th>Data</th>
      <th>Fechadura</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr>
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM armarios";
    $res = mysqli_query($id, $sql);

    while($linha = mysqli_fetch_array($res)){
    ?>
      <tr>
        <td><?php echo $linha['id_armario']; ?></td>
        <td><?php echo $linha['setor']; ?></td>
        <td><?php echo $linha['codigo']; ?></td>
        <td><?php echo $linha['tamanho']; ?></td>
        <td><?php echo $linha['preco']; ?></td>
        <td><?php echo $linha['status']; ?></td>
        <td><?php echo $linha['observacao']; ?></td>
        <td><?php echo $linha['data']; ?></td>
        <td><?php echo $linha['fechadura']; ?></td>
        <td align='center'>
          <a href='form_edita_armario.php?id_armario=<?php echo $linha['id_armario']; ?>'>
            <img class="img" src='img/edit.png'>
          </a>
        </td>
        <td align='center'>
          <a href='deleta_armario.php?id_armario=<?php echo $linha['id_armario']; ?>'>
            <img class="img" src='img/lixo.png'>
          </a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
