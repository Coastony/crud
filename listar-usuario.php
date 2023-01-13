<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>
<body style="background: #d8d9d2">
<h1 class="text-center mb-5">Listar usuário</h1>

<?php
 $sql = "SELECT * FROM usuarios";
 $res = $conn->query($sql);
 $qtd = $res->num_rows;

 if($qtd > 0) {
  print "<table class='table table-hover table-striped table-bordered border border-dark'>";
    print "<tr class='bg-dark'>";
    print "<th class='text-white text-center'>#</th>";
    print "<th class='text-white text-center'>Nome</th>";
    print "<th class='text-white text-center'>Email</th>";
    print "<th class='text-white text-center'>Data de Nascimento</th>";
    print "<th class='text-white text-center'>Ações</th>";
    print "</tr>";
  while($row = $res->fetch_object()) {
    print "<tr>";
    print "<td class='text-center pt-auto'>".$row->id."</td>";
    print "<td class='text-center pt-auto'>".$row->nome."</td>";
    print "<td class='text-center pt-auto'>".$row->email."</td>";
    print "<td class='text-center pt-auto'>".$row->data_nasc."</td>";
    print "<td class='text-center pt-auto'> 
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" 
            class='btn btn-danger'>Excluir</button>
          </td>";
    print "</tr>";
  }
  print "</table>";
 }else {
  print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
 }

?>
</body>
</html>