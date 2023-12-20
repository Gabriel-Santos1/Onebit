<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>

    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>


    <div class="container">

        <div class="row">

            <?php
            include "connection.php";

            $name = $_POST['name'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO `people`(`name`, `cpf`, `email`, `password`, `phone`) 

                VALUES ('$name','$cpf','$email','$password','$phone')";


            if (mysqli_query($conn, $sql)) {
                mensagem ("$name cadastrado com sucesso", 'success');
            } else {
                mensagem ("$name não cadastrado", 'danger');

            }

            ?>

            <a href = "index.php"><button type="button" class="btn btn-outline-danger">Voltar</button></a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>