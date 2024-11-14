<?php

//Irei user o Método MySQLi (My Structed Query Language Improved) para se conectar com o banco de dados, porém eu sei das características do PDO (Hypertext Preprocessor Data Object). 
//Ex: Sua interoperabilidade com outros tipos de banco de dados fora o MySQL

$servername = "localhost";
$username = "root";  // root é o usuário pagrão do XAMPP
$password = "";  // XAMPP não tem senha por padrão
$dbname = "crud-app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Conexão Falhou: " . $conn->connect_error);
}
?>