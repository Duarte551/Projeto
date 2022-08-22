<?php     
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização</title>
    <style>
      #corpo{
         font-family: Arial, Helvetica, sans-serif;
      background-image: url("https://cdnb.artstation.com/p/assets/images/images/022/498/123/large/matheus-matheus-purple-690724-1920.jpg?1575638719");
      width: 10%;
      }
      h1{
    color:white;    
    text-align:center;
    position:fixed; top:0; left:0; right: 0;

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
<?php 

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/db/conexao.php";

$c = $_GET['id'];

if (isset($_POST['submit'])){
$c = $id;
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

$a = new Database();
$dados = $a->update($nome, $email, $senha, $telefone, $id);

} else 
{}

echo 
"<form id='tela_login' action='scriptupdate.php' method='POST'>
<div class='mb-3'>
<center><h1>Atualizar Dados</h1></center> <br> <br>
  <input id='teste' type='text' class='form-control' name='nome' placeholder='Nome'> <br> <br>
</div>
<div class='mb-3'>
  <input id='teste' type='email' class='form-control' name='email' placeholder='Email'> <br> <br>
</div>
<div class='mb-3'>
  <input id='teste' type='password' class='form-control' name='senha' placeholder='Senha'> <br> <br>
</div>
<div class='mb-3'>
  <input id='teste' type='text' class='form-control' name='telefone' placeholder='Telefone'> <br> <br>
</div>
<input id='button' type='submit' class='btn btn-primary' value='Atualizar' name='submit'>
<div class='mb-3'>
  <input type='hidden' class='form-control' name='id' value='$c';> <br> <br>
</div>

</form>";
?>
</body >
</html>


