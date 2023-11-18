<?php

require 'conexao.php';
$e = new Conexao();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $e->excluir($id);
    header('Location:index.php');

}
