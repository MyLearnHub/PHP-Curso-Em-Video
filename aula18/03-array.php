<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <pre>
            <?php
                $c = range(5, 20, 2);

                foreach ($c as $valor) {
                    echo "$valor ";
                }
            ?>
        </pre>
    </div>
</body>
</html>