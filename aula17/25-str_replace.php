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
            $frase = "Gosto de estudar Matemática! Matemática é muito legal!";
            // $novaFrase = str_replace("Matemática", "PHP", $frase);
            $novaFrase = str_ireplace("matemática", "PHP", $frase);

            echo $novaFrase;
        ?>
    </div>
</body>
</html>