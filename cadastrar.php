<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row justify-content-center">
            <div class="cal-md-6 text-center mb-5">
                <h2>Cadastro</h2>
            </div>
        </div>    
        <div class="row justify-content-center">
            <div class="cal-md-12 col-lg-10">
                    <div class="row align-items-center">
                        
                        <div class="col-7">
                        <form>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group mb-3">
                                        <label class="label">Nome</label>
                                        <input placeholder="Nome" name="nome" id="nome" class="form-control">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-group mb-3">
                                        <label class="label">Sobre nome</label>
                                        <input placeholder="Sobre nome" nome="sobrenome" id="sobrenome" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-7">
                                    <div class="form-group mb-3">
                                        <label class="label">E-mail</label>
                                        <input placeholder="e-mail" type="email" nome="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group mb-3">
                                        <label class="label">Data de Nascimento</label></br>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mb-3">
                                        <label class="label">Senha</label>
                                        <input placeholder="********" name="senha" type="passwrod" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-3">   
                                        <label class="label">Confirmação de Senha</label>
                                        <input placeholder="********" name="confirmacao_senha" type="passwrod" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-9">
                                    <div class="form-group mb-3">
                                        <label class="label">Endereço</label>
                                        <input placeholder="Endereço" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label class="label">Número</label>
                                        <input placeholder="Número" id="number" nome="number" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-7">
                                    <div class="form-group mb-3">
                                        <label class="label">Cidade</label>
                                        <input placeholder="Cidade" class="form-control">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group mb-3">
                                        <label class="label">Estado</label>
                                            <select nome="estado" id="estado" form="estado" class="form-select">
                                            <option value="SP">São Paulo</option>
                                            <option value="PR">Paraná</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <button class="btn btn-primary">Salva</button>
                                <a href="index.php" class="btn btn-secondary">Voltar</a>
                            </div>
                        </form>
                        </div>
                        <div class="col-5">
                            <img class="img" src="cadastro.png" width="350px">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>