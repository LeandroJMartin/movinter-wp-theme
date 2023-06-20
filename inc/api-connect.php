<?php

$host = '177.67.241.33';
$dbname = 'movinter';
$user = 'movinter_user';
$pass = 'Brz462#*Da';

$conn = null;

try {
  $driverOptions = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
  $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass, $driverOptions);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
  echo "Erro na conexão: " . $th->getMessage();
}

function GetUserQR($iduser)
{

  global $conn;
  $sql =  "SELECT * FROM cliente WHERE id_credenciamento = $iduser";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach ($data as $user) :
    return $user;
  endforeach;

  $conn = null;
}
