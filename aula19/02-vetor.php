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
                $v = array("A", "J", "M", "X", "K");
                print_r($v);

                $v[] = "O";
                print_r($v);

                array_push($v, "O");
                print_r($v);

                array_pop($v);
                print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>