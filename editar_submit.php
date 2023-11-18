<?php

require 'conexao.php';
$eds = new Conexao();

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $eds->update($id, $nome, $email, $descricao, $quantidade, $preco);
    header('Location:index.php');
}