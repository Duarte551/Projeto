<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #corpo{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("https://images2.alphacoders.com/542/thumb-1920-542730.png");
    width: 10%;
}
#tela_login {
    background-color:black;
    position:fixed;bottom: 2px; ;
    top:40%;
    left:50%;
    transform:translate(-50%, -50%);
    padding: 50px;
    border-radius: 15px;
    color:whitesmoke;
    width:300px;
    }

input {
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
}
button{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    cursor: pointer;
}
button:hover{
    background-color:deepskyblue;
    cursor : pointer;
}
#teste:hover{
    width: 300px;
    padding: 10px;
    border: none;
    outline: none;
    font-size: 30px;
    border-radius: 10px;
    transition: 0.25s;
}
#submit{  background-color: whitesmoke;
            color: black;
            border-radius: 10px;
  }
  #submit:hover{
    color: black;
    background-color: rgb(70, 51, 190);
  }
</style>
</head>
<body id="corpo">
<form id="tela_login" method="POST" action="login.php">
    <center><h1>Login</h1></center> <br> <br>
    <input type="email" id="teste" name="email" placeholder="Email"> <br> <br>
    <input type="password" id="teste" name="senha" placeholder="Senha"> <br> <br>
    <input type="submit" id="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php 
session_start();
if($_POST){

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/db/conexao.php";

if (isset($_POST['submit'])){
$email = $_POST['email'];
$senha = $_POST['senha'];

$a = new Database();
$dados = $a->select();
foreach ($dados as $key){ 
    if($email == $key['email']){if($senha == $key['senha'])
    {$_SESSION ['login'] = true; header('Location: /../index.php');
    }   else{
  header('Location: login.php');
}
}
}
} 
} 
  ?>
