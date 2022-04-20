<?php     
session_start();


require_once __DIR__ . "/../app/db/conexao.php";

if (isset($_POST['Excluir'])){
    $id = $_POST['id']; 


    $delete = new Database();
    $delete->delete($id);

    header('Location: ./../index.php');

} else {echo "Erro ao excluir";}

?>

