<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="s
        ha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-
        gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Projeto Final</title>
</head>
<body>
    
    <header>
            
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid"> 
                <h3 class="logo">ETS|Treinamentos</h3>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Cursos</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>

    </header>

    <main>

        <h1 class="titulo-cad">Preencha com seus dados</h1>
        <div class="container">
        <form method="post" action="form.php">
            <label for="nome">Nome</label><br>
            <input class="campo" name="nome" id="nome" type="text">

            <label for="EDV">EDV</label><br>
            <input class="campo" name="edv" id="edv" type="text">

            <label for="Setor">Setor</label><br>
            <input class="campo" name="setor" id="setor" type="text"><br>

            <label for="Curso">Curso</label><br>
            <input class="campo" name="curso" type="text" value="Robotica" readonly="disable"><br>

            <br><br>
            <input class="confirmar" type="submit" value="Enviar inscrição">
        </form>
    </div>

    </main>

    <footer>
        <p class="titulo-footer">Bosch <b>Engineering</b> Technical Scool </p>
    </footer>

    <script src="script.js"></script>
    
</body>
</html>