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

                sort($v);
                print_r($v);

                rsort($v);
                print_r($v);

                asort($v);
                print_r($v);

                arsort($v);
                print_r($v);

                $v2 = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");
                print_r($v2);
                ksort($v2);
                print_r($v2);

                krsort($v2);
                print_r($v2);
            ?>
        </pre>
    </div>
</body>
</html>