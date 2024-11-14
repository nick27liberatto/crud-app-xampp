<?php
include 'config.php';

$sql = "SELECT * FROM estudantes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nicolas CRUD - Read</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Estudantes Cadastrados</h1>
    <a class="btn-cadastrar" href="create.php">Cadastrar</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Aluno</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td id="table"><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id']; ?>">Editar</a> | 
                        <a id="delete" href="delete.php?id=<?php echo $row['id']; ?>">Deletar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="./js/script.js"></script>
</body>
</html>