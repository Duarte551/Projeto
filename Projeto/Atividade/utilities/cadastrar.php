<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <style>
h1{
    color:white;    
    text-align:center;
    position:fixed; top:0; left:0; right: 0;
}

#corpo{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("https://images2.alphacoders.com/542/thumb-1920-542730.png");
    width: 20%;
}
#tela_login {
    background-color:black;
    position:fixed;bottom: 0.5px; ;
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
    border-radius: 10px;
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

#button{  background-color: whitesmoke;
            color: black;
            border-radius: 10px;
  }
  #button:hover{
    color: black;
    background-color: rgb(70, 51, 190);
  }

</style>
</head>
<body id="corpo">
   <center>
    <form id="tela_login" method="POST" action="cadastrar.php">
    <center><h1>Cadastro de Pessoa</h1></center> <br> <br>
    <input type="text" id="teste" name="nome" placeholder="Nome"> <br> <br>
    <input type="email" id="teste" name="email" placeholder="Email"> <br> <br>
    <input type="password" id="teste" name="senha" placeholder="Senha"> <br> <br>
    <input type="text" id="teste" name="telefone" placeholder="Telefone"> <br> <br>
    <input type="submit" id="button" name="submit" value="Cadastrar">
    </form>
</center>
</body>
</html>

<?php 
if ($_POST){

require_once __DIR__ . "./../vendor/autoload.php";
require_once __DIR__ . "./../app/db/conexao.php";

if (isset($_POST['submit'])){

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$a = new Database();
$a-> insert($nome, $email, $senha, $telefone);

header('Location: ./../index.php');

} else {
    echo "Não Cadastrado";
}}
?>