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
                $c = 1;
                while ($c <= 10) {
                    echo "$c <br>";
                    $c++;
                }

                /*
                $c = 10;
                while ($c >= 1) {
                    echo "$c <br>";
                    $c--;
                }
                */

                /*
                $c = 10;
                while ($c >= 0) {
                    echo "$c <br>";
                    $c -= 2;
                }
                */
            ?>
        </div>
    </body>
</html>