<?php 

require_once 'conexao.php';

try {

	$con->beginTransaction();

	$sql = "INSERT INTO tb_alunos (nome , email , senha , cpf , rg ,dt_nasc) VALUES ( :nome, :email, :senha, :cpf, :rg, :dt_nasc)";

	$stmt = $con->prepare($sql);

	$nome = "Francisco";
	$email = "francisco@francisco";
	$senha = "123";
	$cpf = "123";
	$rg = "123";
	$dt_nasc = "30/04/1990";


	$stmt->bindParam(":nome", $nome);
	$stmt->bindParam(":email", $email);
	$stmt->bindParam(":senha", $senha);
	$stmt->bindParam(":cpf", $cpf);
	$stmt->bindParam(":rg", $rg);
	$stmt->bindParam(":dt_nasc", $dt_nasc);

	
	$result = $stmt->execute();

	var_dump($result);

	$con->commit();
	
} catch (PDOException $e) {
	
	$con->rollback();
	echo "Erro: " . $e->getMessage();
}