<?php 

require_once 'conexao.php';



$result = $con->query("SELECT * FROM tb_alunos ORDER BY id");

echo "<pre>";
foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $aluno) {
	print_r($aluno);
	echo "<hr>";
}