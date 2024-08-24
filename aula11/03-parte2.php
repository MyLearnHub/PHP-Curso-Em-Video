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
                $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
                $final = isset($_GET["final"]) ? $_GET["final"] : 0;
                $incremento  = isset($_GET["incremento"]) ? $_GET["incremento"] : 0;

                if ($inicio > $final) {
                    while ($inicio >= $final) {
                        echo "$inicio ";
                        $inicio -= $incremento;
                    }
                } else {
                    while ($inicio <= $final) {
                        echo "$inicio ";
                        $inicio += $incremento;
                    }
                }
            ?>
            <br><a href="03-parte1.php" class="botao">Voltar</a>
        </div>
    </body>
</html>