<?php

$pessoa = [
    "nome" => "João",
    "idade" => 30,
    "cidade" => "São Paulo",
    "profissao" => "Programador",
    "altura" => 1.75,
    "peso" => 70,
    "email" => "joao@email.com"
];

echo "Olá " . $pessoa["nome"] . ", você está com " . $pessoa["idade"] . " anos.<br>";
echo "Cidade: " . $pessoa["cidade"] . "<br>";
echo "Profissão: " . $pessoa["profissao"] . "<br>";
echo "Altura: " . $pessoa["altura"] . " m<br>";
echo "Peso: " . $pessoa["peso"] . " kg<br>";
echo "E-mail: " . $pessoa["email"] . "<br>";

?>


