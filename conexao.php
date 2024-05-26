<?php
$dbname="guarda_volumes354";

if(!($id = mysqli_connect("localhost","root"))){
  echo "Não foi possivel estabelecer uma conexão com o gerenciador MYSQL.";
  exit;
}
if(!($con = mysqli_select_db($id,$dbname))){
  echo "Não foi possivel estabelecer uma conexão com o gerenciador MYSQL.";
  exit;
}
?>