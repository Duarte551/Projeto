<?php 
session_start();
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/db/conexao.php";

if (isset($_GET['logout'])){
    unset($_SESSION['login']);
    session_destroy();
    header('Location: /../index.php');
}
?>