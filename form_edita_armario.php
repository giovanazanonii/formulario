<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORMULÁRIO</title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
<style>
  .img{
    height: 20px;
    width: 20px;
  }
</style>
<?php
include('conexao.php');
$pk = $_GET['id_armario'];
$sql = "Select * from armarios where id_armario=$pk";
$res = mysqli_query($id,$sql);  
while($linha = mysqli_fetch_array($res)){ ?>
<html>
  <meta charset="'UTF-8">
  <table align="center" border="1">
    <h4 align="center">ARMÁRIOS</h4>
    <tr>
      <form action="update_armario.php" method="post">
        <input type="hidden" name="id_armario" value='<?php echo $linha['id_armario'];?>'
    <tr>
      <td>Setor:</td>
      <td><select name="setor">
          <option value='1'>Recepção</option>
          <option value='2'>Biblioteca</option>
          <option value='3'>Sala dos Professores</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Codigo:</td>
      <td><input type="text" name="codigo" value="<?php echo $linha['codigo'];?>"></td>
    </tr>
    <tr>
      <td>Tamanho:</td>
      <td><select name="tamanho">
          <option value='P'>Pequeno</option>
          <option value='M'>Médio</option>
          <option value='G'>Grande</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Preco:</td>
      <td><input type="text" name="preco" value="<?php echo $linha['preco'];?>"></td>
    </tr>
    <tr>
      <td>Status:</td>
      <td><select name="status">
          <option value='A'>Ativo</option>
          <option value='I'>Inativo</option>
          <option value='C'>Manutenção</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Observação:</td>
      <td><input type="text" name="observacao" value="<?php echo $linha['observacao'];?>"></td>
    </tr>
    <tr>
      <td>Data:</td>
      <td><input type="date" name="data"></td>
    </tr>
    <tr>
      <td>Fechadura:</td>
      <td><select name="fechadura">
          <option value='A'>Senha</option>
          <option value='B'>Biometria</option>
          <option value='C'>Chave</option>
        </select>
      </td>
    </tr>
    <td align="center" colspan="2"><input type="submit" value="Cadastrar"></td>
  </table>
</body>
<?php } ?>
</html>
