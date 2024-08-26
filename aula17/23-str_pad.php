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
            $nome = "Guanabara";
            $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
            // $novo = str_pad($nome, 30, " ", STR_PAD_BOTH);
            // $novo = str_pad($nome, 30, " ", STR_PAD_LEFT);

            print("Meu professor $novo é lindo!");
        ?>
    </div>
</body>
</html>