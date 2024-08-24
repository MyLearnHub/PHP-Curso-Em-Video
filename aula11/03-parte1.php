<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="../_css/estilo.css">
    </head>
    <body>
        <div>
            <form method="get" action="03-parte2.php">
                Início: <input type="number" name="inicio" max="100" min="0"><br>
                Final: <input type="number" name="final" max="100" min="0"><br>
                Incremento: <select name="incremento">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                <input type="submit" value="Contar" class="botao">
            </form>
        </div>
    </body>
</html>