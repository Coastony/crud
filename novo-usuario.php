<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro</title>
</head>
<body style="background: #d8d9d2">
<h1 class="text-center mb-5">Novo usuário</h1>
<form action="?page=salvar" method="POST"> 
   <input type="hidden" name="acao" value="cadastrar">
   <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control">
   </div>
   <div class="mb-3">
      <label>E-mail</label>
      <input type="email" name="email" class="form-control">
   </div>
   <div class="mb-3">
      <label>Senha</label>
      <input type="password" name="senha" class="form-control">
   </div>
   <div class="mb-3">
      <label>Data de nascimento</label>
      <input type="date" name="data_nasc" class="form-control">
   </div>
   <div class="mb-3">
      <button type="submit" class="btn btn-primary">Enviar</button>
   </div>
</form>
</body>
</html>