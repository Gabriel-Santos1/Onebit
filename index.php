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

            <div class="column">

                <form action = "form_Script.php" method="POST">

                    <div class="mb-3">
                        <label for="Name" class="form-label">Nome</label>
                        <input type="text" class="form-control" placeholder="Ex: Maria Silva" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="Cpf" class="form-label">Cpf</label>
                        <input type="text" class="form-control" placeholder="Ex: 111.222.333-25" name="cpf">
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Ex: name@example.com" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Ex: joao2568!" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="Phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Ex: joao2568!" name="phone">
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>


            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>