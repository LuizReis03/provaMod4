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
    <title>Prova Módulo 4</title>
</head>

                <?php
                        $conexao = mysqli_connect('localhost','root','');
                        mysqli_select_db($conexao,'controle');
                        $exibe="SELECT * FROM inscricao";
                        $executa=mysqli_query($conexao,$exibe);

                        $python = 5;
                        $robotica = 5;
                        $ia = 5;

                        while($row=mysqli_fetch_array($executa)){
                            $nome= $row['nome'];
                            $num_edv = $row['edv'];
                            $setor = $row['setor'];
                            $curso = $row['curso'];
                        if($curso == "Python"){
                            if ($python <= 0) {
                                continue;
                            }else{
                                $python = $python - 1;
                            }
                        }
                        if($curso == "Machine Learning"){
                            if ($ia <= 0) {
                                continue;
                            }else{
                                $ia = $ia - 1;
                            }
                        }
                        if($curso == "Robotica"){
                            if ($robotica <= 0) {
                                continue;
                            }else{
                                $robotica = $robotica - 1;
                            }
                        }
                    }
                ?>

<body>

    <header>
                
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid"> 
                <h3 class="logo">ETS|Treinamentos</h3>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
            </div>
        </nav>

    </header>

    <main>

        <h1 class="titulo">Cursos disponíveis</h1>

        <div class="back-cards">
            <div class="div-card">
                <div class="header-card">
                    <p class="titulo-card">Programação Python</p>
                </div>
                <div class="body-card">
                    <img class="img-card-python" src="img/python.jpg">
                </div>
                <div class="footer-card">
                    <button id="btn-python" class="btn btn-success"><a class="link-btn" href="python.php">Inscrições</a></button>
                    <p class="titulo-footer-card">Vagas disponíveis: <?php echo $python;?></p>
                </div>
            </div>
            
            <div class="div-card">
                <div class="header-card">
                    <p class="titulo-card">IA - Machine Learning</p>
                </div>
                <div class="body-card">
                    <img class="img-card" src="img/card2.jpg">
                </div>
                <div class="footer-card">
                <button id="btn-ia" class="btn btn-success"><a class="link-btn" href="ia.php">Inscrições</a></button>
                    <p class="titulo-footer-card">Vagas disponíveis: <?php echo $ia;?></p>
                </div>
            </div>

            <div class="div-card">
                <div class="header-card">
                    <p class="titulo-card">Robótica</p>
                </div>
                <div class="body-card">
                    <img class="img-card" src="img/card1.jpg">
                </div>
                <div class="footer-card">
                    <button id="btn-robo" class="btn btn-success"><a class="link-btn" href="robo.php">Inscrições</a></button>
                    <p class="titulo-footer-card">Vagas disponíveis: <?php echo $robotica;?></p>
                </div>
            </div>
        </div>
        

    </main>

    <footer>
        <p class="titulo-footer">Bosch <b>Engineering</b> Technical Scool </p>
    </footer>

    <script>

        var python = '<?=$python?>';
        var ia = '<?=$ia?>';
        var robo = '<?=$robotica?>';

        if (python <= 0 && ia <= 0 && robo <= 0) {
            alert("Todas as vagas estão esgotadas!!");
        }

        if (python == 0) {
            document.getElementById("btn-python").disabled = true;
        }
        if (ia == 0) {
            document.getElementById("btn-ia").disabled = true;
        }
        if (robo == 0) {
            document.getElementById("btn-robo").disabled = true;
        }
        
    </script>

    
</body>

</html>