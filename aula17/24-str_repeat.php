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
            $txt = str_repeat("Php", 5);

            print("O texto gerado foi $txt");
            print(str_repeat("-", 20));
        ?>
    </div>
</body>
</html>