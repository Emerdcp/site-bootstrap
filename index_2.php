<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main class="container-fluid">
        <form>
            <div class="mb-3 mt-5">
                <!--<label class="form-label">Usuário</label>Para colocar linha e não dentro do campo-->
                <input type="email" class="form-control" placeholder="usuário/e-mial">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="senha">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">
                    Entrar
                </button>
                <a href="cadastrar.php" class="btn btn-secondary">
                    Cadastrar
                </a>
            </div>
        </form>
    </main>
</body>
</html>