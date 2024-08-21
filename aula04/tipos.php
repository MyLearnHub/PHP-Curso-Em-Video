<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $n = 4;
            $no = (string) "Gustavo <br/>";
            // $no = (int) "Gustavo"; // 0
            // $no = (int) "10Gustavo"; // 10
            // $no = (int) "Gustavo10"; // 0
            $n = 4.5;
            echo $no;

            $nome = "Gustavo";
            $idade = 36;
            // echo $nome." tem ".$idade." anos!";
            echo "$nome tem $idade anos!";
            // echo '$nome tem $idade anos!';
            // echo "$nome tem $Idade anos!";
        ?>
    </div>
</body>
</html>