<?php

require 'conexao.php';
$adc = new Conexao();

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $adc->inserir($nome,$email,$descricao,$quantidade,$preco);
    header('Location:index.php');


}