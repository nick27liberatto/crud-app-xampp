<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM estudantes WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE estudantes SET name='$name', email='$email', password='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Nicolas CRUD - Update</title>
</head>
<body>
    <h1>Atualizar Estudante</h1>
    <form method="POST">
        <label for="name">Nome:</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        <label for="password">Senha:</label><br>
        <input type="password" name="password" value="<?php echo $row['password']; ?>" required><br><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>