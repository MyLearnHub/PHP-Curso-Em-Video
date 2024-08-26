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
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            // $pos = strpos($frase, "php");

            echo "$frase <br/> A string foi encontrada na posição $pos";
        ?>
    </div>
</body>
</html>