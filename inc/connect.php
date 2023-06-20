<?php

$host = 'localhost';
$dbname = 'movint79_api_data';
$user = 'movint79_movinter';
$pass = '80g9I3q1B2*J';

try {
    $driverOptions = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, $driverOptions);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    echo "Erro na conexão: " . $th->getMessage();
}
