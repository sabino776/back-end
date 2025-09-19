<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>galeria de imagens</h1>
    <a href="upload.php">enviar nova imagem</a>
    <br>
    <h2>imagens enviadas:</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 10px">
        <?php
        $pasta ="upload/";
        if (is_dir($pasta)) {
            $arquivo = scandir($pasta);
            foreach ($arquivo as $arquivo) {
                if ($arquivo !="." && $arquivo !=".."){
                    echo "<div>
                        <img src='$pasta$arquivo' width='150' style='border:1px solid #ccc;'>
                    </div>";
                }
            }
        } else {
            echo "<p>nenhuma imagem encontrada.</p>";
        }
        ?>
    </div>
</body>
</html>
