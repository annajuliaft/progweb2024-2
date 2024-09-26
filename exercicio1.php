<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP com Imagem e Texto</title>
</head>
<body>
    <?php
        // Caminho da imagem
            $imagem = 'https://picsum.photos/500/600'; // URL de uma imagem de exemplo
            $texto = 'Imagem da semana 2';

            // Imprimindo a imagem
            echo "<img src='$imagem' alt='Imagem Exemplo' />";

            // Imprimindo o texto
            print "<p>$texto</p>";
    ?>
</body>
</html>