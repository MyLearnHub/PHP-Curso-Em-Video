<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
        <pre>
            <?php
                /* $v = array(0 => 5,
                           1 => 9,
                           2 => 8,
                           3 => 7); */

                /* $v = array(3 => 5,
                           1 => 9,
                           0 => 8,
                           7 => 7); */

                // unset($v[0]);
                // print_r($v);

                $v = array(
                    "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65
                );

                // print_r($v);

                foreach ($v as $k => $c) {
                    echo "O campo $k possui o conteúdo $c<br/>";
                }
            ?>
        </pre>
</div>
</body>
</html>