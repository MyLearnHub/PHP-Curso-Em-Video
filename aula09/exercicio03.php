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
            $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
            $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
            $media  = ($nota1 + $nota2) / 2;

            echo "A média entre $nota1 e $nota2 é igual a $media<br>";

            if ($media < 5) {
                $situacao = "REPROVADO";
            } elseif ($media < 8 ) {
                $situacao = "RECUPERAÇÂO";
            } else {
                $situacao = "APROVADO";
            }

            echo "Situação do aluno $situacao<br>";
        ?>
        <a href="exercicio03.html" class="botao">Voltar</a>
    </div>
</body>
</html>