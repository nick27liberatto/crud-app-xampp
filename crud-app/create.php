<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO estudantes (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo estudante cadastrado com sucesso!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nicolas CRUD - Create</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Cadastrar Estudante</h1>
    <form action="create.php" method="POST" autocomplete="off">
        <label for="name">Nome:</label><br>
        <input type="text" name="name" required><br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" name="email" required><br><br>
        <label for="password">Senha:</label><br>
        <input type="password" name="password" required><br><br>
        <div id="btn">
        <button type="submit">Enviar</button>
        <a class="btn-listar" href="index.php">Listar</a>
        </div>
    </form>
</body>
</html>