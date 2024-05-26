<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Armário</title>
  <link rel="stylesheet" type="text/css" href="css/update_armario.css">
</head>
<body>
  <div class="container">
  <?php
        include('conexao.php');
        $pk = $_POST['id_armario'];
        $setor = $_POST['setor'];
        $codigo = $_POST['codigo'];
        $tamanho = $_POST['tamanho'];
        $preco = $_POST['preco'];
        $status = $_POST['status'];
        $observacao = $_POST['observacao'];
        $data = $_POST['data'];
        $fechadura = $_POST['fechadura'];

        $sql = "Update armarios set codigo = '".$codigo."',
                            preco = '".$preco."',
                            observacao = '".$observacao."'
        where id_armario = $pk";
        $res = mysqli_query($id,$sql);
        if($res){
          echo"Registro atualizado com sucesso";
        }
          else{
        echo"Erro ao atualizar registro";
        }
    ?>
    </div> 
</body>
</html>
<?php
