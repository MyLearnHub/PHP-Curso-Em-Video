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
            $ano = $_GET["an"];
            $idade = 2024 - $ano;

            echo "Quem nasceu em $ano tem idade de $idade anos.";

            $tipo = ($idade >= 18 && $idade <= 64) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
            echo "E dessa forma seu voto é $tipo";
        ?>
    </div>
</body>
</html>