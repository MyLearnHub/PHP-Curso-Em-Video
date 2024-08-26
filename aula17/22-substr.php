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
            $site = "Curso em Video";
            $sub = substr($site, 0, 5);
            // $sub = substr($site, 6);
            // $sub = substr($site, -5);
            // $sub = substr($site, -5, 2);

            echo "$sub ";
        ?>
    </div>
</body>
</html>