<?php
require 'conexao.php';
$i = new Conexao();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
    <title>GAMES</title>
</head>
<body class="body1">
    <div class="container">
    <h1>GAMES SISTEMAS</h1>

 <table border="3" width="100%" class="table table-primary table-striped-columns">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Descrição</th>
    <th>quantidade</th>
    <th>Preço Unitário</th>
    <th>Total</th>
    <th>AÇÕES</th>
</tr>

<?php
$listar = $i->Listar();


foreach($listar as $itens){
$quantidade = $itens['quantidade'];
$preco = $itens['preco'];

$valorTotal = $quantidade * $preco; ?>

<tr>
<td><?php echo $itens['id']; ?></td>
<td><?php echo $itens['nome']; ?></td>
<td><?php echo $itens['email']; ?></td>
<td><?php echo $itens['descricao']; ?></td>
<td><?php echo $quantidade; ?></td>
<td><?php echo $preco; ?></td>
<td><?php echo $valorTotal; ?></td>
<td><a type="button" class="btn btn-primary" href="editar.php?id=<?php echo $itens['id'];?>" data-bs-toggle="modal" data-bs-target="#editarModal">EDITAR</a>
<a type="button" class="btn btn-danger" href="excluir.php?id=<?php echo $itens['id'];?>" data-bs-toggle="modal" data-bs-target="#excluirModal">EXCLUIR</a>
</td>
</tr>



<?php } ?>
    </table><br>
    <a type="button" class="btn btn-outline-success" href="adicionar.php">ADICIONAR</a>
    </div>
<!-- Modal editar-->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal editar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       queres mesmo editar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Sair</button>
        <a type="button" class="btn btn-outline-info" id="editarModal" href="editar.php?id=<?php echo $itens['id'];?>">Editar</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal excluir-->
<div class="modal fade" id="excluirModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal editar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       queres mesmo excluir?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Sair</button>
        <a type="button" class="btn btn-outline-danger" id="excluirModal" href="excluir.php?id=<?php echo $itens['id'];?>">Excluir</a>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>