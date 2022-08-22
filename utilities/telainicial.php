<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/includes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>WebStack</title>
    <style>
   
  </style>
</head>
<header><div id="start"> 
    <br>
      <h1>Usuários Cadastrados</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-none" style="background-color: #333;">
            <div class="container-fluid" style="background-color: #333; color: white;">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="indicação" class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>                  
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button id="button" class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
                <?php 
                   if($login){ 
                echo "<div><i class='fa-solid fa-arrow-right-from-bracket'>
                  <li><a id='cadastrar' class='nav-link active' aria-current='page' href='./utilities/logout.php?logout'>Sair</a></li></div>
                  </i></ul>
              </div>";}
              else {                
                echo  "<div><i class='fa-solid fa-arrow-right-from-bracket'>
                  <li><a id='cadastrar' class='nav-link active' aria-current='page' href='./utilities/login.php'>Login</a></li></div>
                  </i></ul>
              </div>";}?>
                <div>
                  <li><a id="cadastrar" class="nav-link active" aria-current="page" href="./utilities/cadastrar.php">Cadastrar novo usuário</a></li></div>
                </ul>
              </div>
            </div>
          </nav>
    </div></header>
<body>

<table class="table table-dark">
  <thead>
    <tr class="table-active">
        <td>Id</td>
        <td colspan="2" class="table-active">Nome</td>
        <td>Email</td>
        <td>Senha</td>
        <td>Telefone</td>
        <td>Funções</td>
</tr>
  </thead>
  <tbody>
  <?php 
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/db/conexao.php";

$a = new Database();
$a->tabela();
?>
   
  </tbody>
</table>

</body>
<div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar Exclusão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="utilities/delete.php" method="POST">
        <p>Deseja realmente excluir </p> <p><b id=nome_pessoa>nome da pessoa </b>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <input type="hidden" name="nome" id="nome_pessoa_1" value="">
        <input type="hidden" name="id" id="cod_pessoa" value="">
        <input type="submit" name="Excluir" class="btn btn-danger"value="Excluir">
    </form>
      </div>
    </div>
  </div>
</div>

        <script type="text/javascript">
            function pegar_dados (id, nome){
                document.getElementById('nome_pessoa'). innerHTML = nome;
                document.getElementById('nome_pessoa_1'). value = nome;
                document.getElementById('cod_pessoa'). value = id;
            }

        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>

