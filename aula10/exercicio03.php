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
            $estado = isset($_GET["estado"]) ? $_GET["estado"] : "Inválido";

            switch ($estado) {
                case "AC":
                case "AP":
                case "AM":
                case "PA":
                case "RO":
                case "RR":
                case "TO":
                    $regiao = "Região Norte";
                    break;
                case "AL":
                case "BA":
                case "CE":
                case "MA":
                case "PB":
                case "PE":
                case "PI":
                case "RN":
                case "SE":
                    $regiao = "Região Nordeste";
                    break;
                case "DF":
                case "GO":
                case "MT":
                case "MS":
                    $regiao = "Região Centro-Oeste";
                    break;
                case "ES":
                case "MG":
                case "RJ":
                case "SP":
                    $regiao = "Região Sudeste";
                    break;
                case "PR":
                case "RS":
                case "SC":
                    $regiao = "Região Sul";
                    break;
                default:
                    echo "Estado inválido";
            }

            echo "Você mora na <span class='foco'>$regiao</span><br>";
        ?>
        <a href="exercicio03.html" class="botao">Voltar</a>
    </div>
</body>
</html>