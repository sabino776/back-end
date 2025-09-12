<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Painel</title>
</head>
<body style="text-align:center;">
  <img src="https://uploads.metroimg.com/wp-content/uploads/2023/12/27180332/Neymar-Buzeira-Colar-R2-milhoes-1.jpg" alt="Logo" width="150"><br><br>
  <h1 style="color: darkblue;">Bem-vindo a nata!</h1>
  <p style="color: green;">Você entrou na tropa da rataiada🐀</p>
    <a href="nota.php">lançar nota</a>
</body>
</html>
<?php
file_put_contents("log.txt","usuario acessou em ". date("d/w/y h:i:s"). "\n", FILE_APPEND);
?> 