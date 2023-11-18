<?php
require 'conexao.php';
$ed = new Conexao();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $lista = $ed->pesquisar($id);

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>games sistemas</title>
</head>
<body>

<form method="POST" action="editar_submit.php">
    <input type="hidden" name="id" value="<?php echo $lista['id']; ?>">

NOME<br>
<input type="text" name="nome" value="<?php echo $lista['nome']; ?>"><br><br>
E-Mail<br>
<input type="text" name="email" value="<?php echo $lista['email']; ?>"><br><br>
DESCRIÇÃO<br>
<input type="text" name="descricao" value="<?php echo $lista['descricao']; ?>"><br><br>
QUANTIDADE<br>
<input type="text" name="quantidade" value="<?php echo $lista['quantidade']; ?>"><br><br>
PREÇO<br>
<input type="text" name="preco" value="<?php echo $lista['preco']; ?>"><br><br>

<button type="submit">SALVAR</button>

    </form>
</body>
</html>