<?php  

require_once __DIR__ . "/../../vendor/autoload.php";


class Database {
    const HOST = "localhost";
    const USER = "root";
    const PASS = "";
    const DATABASE = "test";

    private function conectar(){
    try {
        $con = new PDO("mysql:host=".self::HOST. ";dbname=".self::DATABASE , self::USER , self::PASS);
        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }catch (PDOException $erro){
        die ('Fatal error' . $erro->getMessage());
    }
       }

    public function insert($nome, $email, $senha, $telefone){
        $a = $this->conectar();
        $b = $a->prepare("INSERT INTO pessoas (nome, email, senha, telefone) VALUES ('$nome', '$email', '$senha', '$telefone')");
        $b->execute();
        return $b;

    }   
       
    public function select(){
        $a = $this->conectar(); 
        $b = $a->prepare("SELECT * FROM pessoas");
        $b->execute(array());
        $result = $b->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($nome, $email, $senha, $telefone, $id){
        $a = $this->conectar(); 
        $b = $a->prepare("UPDATE pessoas SET nome = '$nome', email = '$email', senha = '$senha', telefone = '$telefone' WHERE id = '$id'");
        $b->execute(array());
        $result = $b->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function delete($id){
        $a = $this->conectar(); 
        $b = $a->prepare("DELETE FROM pessoas WHERE id = :id");
        $b->bindValue(":id",$id);
        $b->execute();

        return $b;
    }

    function tabela(){
        $a = new Database(); 
      
        $login = $_SESSION ['login'] ?? False;
            $dados = $a->select();
            foreach ($dados as $key){
                $id = $key ['id'];
                $nome = $key['nome'];
                $email = $key['email'];
                $senha = $key['senha'];
                $telefone = $key['telefone'];

                $_GET['id'] = $id;
                echo " <tr class='table-active'>
                <th scope='row'>$id</th>
                <td colspan='2' class='table-active'>$nome</td>
                <td>$email</td>
                <td>$senha</td>
                <td>$telefone</td>
                ";
                if($login){ 
                   echo "<td>
                    <a href='utilities/update.php?id=$id' class='btn btn-success btn sm'>Editar</a>
                    <a href='./../../../utilities/delete.php?' class='btn btn-danger btn sm' data-toggle='modal' data-target='#confirma'
                    onclick=".'"'. "pegar_dados($id, '$nome')" . '"' . ">Delete</a>
                </tr>";
                }   else {
                    echo "<td></td>";
                } 
            
            } return true;
    }
}
?>