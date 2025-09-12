<?php
// importando as classes
require_once "usuario.php";
require_once "professor.php";
require_once "aluno.php";
// Criando objetos
$professor1 = new professor("Carlos Silva", "carlos@escola.com", "Matemática");
$professor2 = new professor("Mariana Souza", "mariana@escola.com", "Física");

$aluno1 = new aluno("Joao Santos", "joao@aluno.com", "2025A001");
$aluno2 = new aluno("Ana Pereira", "ana@aluno.com", "2025A002");

// Exibindo informações dos professores
echo "<h2>Professores</h2>";
echo $professor1->exibirinfo() . "<br>";
echo $professor1->daraula() . "<br><br>";

echo $professor2->exibirinfo() . "<br>";
echo $professor2->daraula() . "<br><br>";

// Exibindo informações dos alunos
echo "<h2>Alunos</h2>";
echo $aluno1->exibirInfo() . "<br>";
echo $aluno1->estudar() . "<br><br>";

echo $aluno2->exibirInfo() . "<br>";
echo $aluno2->estudar() . "<br><br>";
?>
