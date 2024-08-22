<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php # Comentário
            /* Esse exercicío pretende demonstrar o uso
            de operadores de incremento e decremento */
            $atual = $_GET["aa"]; // Essa linha vai pegar o ano na URL
            echo "O ano atual é $atual e o ano anterior é " . --$atual;
        ?>
    </div>
</body>
</html>