<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet"></link>

  <title>Cadastro</title>
</head>
<body style="background: #d8d9d2">
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="?page=listar">Listar Usuários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
        include("config.php");
        switch(@$_REQUEST["page"]) {
          case "novo":
           include("novo-usuario.php");
           break;
         case "listar":
           include("listar-usuario.php");
           break;
         case "salvar";
           include("salvar-usuario.php");
           break;
         case "editar":
          include("editar-usuario.php");
          break;
          default:
           print "<h1>Hello World!</h1>";
         }
      ?>
    </div>
  </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>