<?php

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$hostname = $_ENV['DB_HOST'] ;
$username = $_ENV['DB_USERNAME'] ;
$password = $_ENV['DB_PASSWORD'] ;
$database = $_ENV['DB_NAME'] ;

$konek = new mysqli($hostname,$username,$password,$database) ;

if($konek->connect_error){
    die("Maaf Koneksi Gagal: ".$konek->connect_error);
}


?>