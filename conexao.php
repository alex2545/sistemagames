<?php 
class Conexao{

private $pdo;


public function __construct(){

    $dbname = "gamessistemas";
    $host = "localhost";
    $port = "3306";
    $user = "root";
    $pass = "";

    $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host.";port=".$port."", $user, $pass);



}

public function Listar(){
$sql = "SELECT * FROM usuario";
$sql = $this->pdo->query($sql);

if($sql->rowCount() > 0){
    return $sql->fetchAll();

}else{
    return array();
}

}

public function excluir($id){
$sql = "DELETE FROM usuario WHERE id = :id";
$sql = $this->pdo->prepare($sql);
$sql->bindValue(":id", $id);
$sql->execute();
}


public function inserir($nome,$email,$descricao,$quantidade,$preco){
$sql = "INSERT INTO usuario(nome,email,descricao,quantidade,preco)VALUES(:nome,:email,:descricao,:quantidade,:preco)";
$sql = $this->pdo->prepare($sql);
$sql->bindValue(":nome", $nome);
$sql->bindValue(":email", $email);
$sql->bindValue(":descricao", $descricao);
$sql->bindValue(":quantidade", $quantidade);
$sql->bindValue(":preco", $preco);
$sql->execute();
}

public function update($id,$nome,$email,$descricao,$quantidade,$preco){
$sql = "UPDATE usuario SET nome = :nome, email = :email, descricao = :descricao, quantidade = :quantidade, preco = :preco WHERE id = :id";
$sql = $this->pdo->prepare($sql);
$sql->bindValue(":id", $id);
$sql->bindValue(":nome", $nome);
$sql->bindValue(":email", $email);
$sql->bindValue(":descricao", $descricao);
$sql->bindValue(":quantidade", $quantidade);
$sql->bindValue(":preco", $preco);
$sql->execute();
}

public function pesquisar($id){
$sql = "SELECT * FROM usuario WHERE id = :id";
$sql = $this->pdo->prepare($sql);
$sql->bindValue(":id", $id);
$sql->execute();

if($sql->rowCount() > 0){
    return $sql->fetch();

}else{
    return array();
}
}

}
