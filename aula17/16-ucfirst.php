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
            $nome = "gustaVo guaNabara";
            $nome2 = ucfirst(strtolower($nome));

            echo "Seu nome é $nome2";
        ?>
    </div>
</body>
</html>