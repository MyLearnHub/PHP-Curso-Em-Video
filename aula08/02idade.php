<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="../_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
                $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
                $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";

                $idade = date("Y") - $ano;
                // $idade = date("y") - $ano; // Mostra o ano reduzido, só os últimos 2 valores

                echo "$nome é $sexo e tem $idade anos.";
            ?>
            <a href="02exercicio.html">Voltar</a>
        </div>
    </body>
</html>