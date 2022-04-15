<meta http-equiv="refresh" content="0.0002; index.php">
<?php

    $nome = $_POST['nome'];
    $edv = $_POST['edv'];
    $setor = $_POST['setor'];
    $curso = $_POST['curso'];


    $conexao = mysqli_connect('localhost','root','');
    mysqli_select_db($conexao,'controle');
    $grava="INSERT INTO `inscricao` (`id`,`nome`,`edv`,`setor`,`curso`) VALUES (NULL,'$nome','$edv','$setor','$curso');";
    $executa=mysqli_query($conexao,$grava) or die ("Não foi possível executar.");

?>