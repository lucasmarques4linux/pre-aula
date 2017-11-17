<?php 

require_once 'conexao.php';

try {

	$con->beginTransaction();

	$sql = "INSERT INTO tb_alunos (nome , email , senha , cpf , rg ,dt_nasc) VALUES ( :nome, :email, :senha, :cpf, :rg, :dt_nasc)";

	$stmt = $con->prepare($sql);

	$values = [
		":nome" 	=> "Sergio",
		":email" 	=> "sergio@sergio",
		":senha" 	=> "123",
		":cpf" 		=> "123",
		":rg" 		=> "123",
		":dt_nasc" 	=> "31/01/65",
	];

	$result = $stmt->execute($values);

	var_dump($result);

	$con->commit();
	
} catch (PDOException $e) {
	
	$con->rollback();
	echo "Erro: " . $e->getMessage();
}