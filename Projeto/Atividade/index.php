<?php 
session_start();
$login = $_SESSION['login'] ?? False;

require_once __DIR__ . '/app/db/conexao.php';
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/utilities/telainicial.php';
?>