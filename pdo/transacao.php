<?php 

require_once 'conexao.php';


try {
	
	$con->beginTransaction();

	$sql = "INSERT INTO tb_alunos ( nome , email , senha , cpf , rg ) VALUES ('Teste789','teste789@teste', '123','123','123')";

	$result = $con->exec($sql);

	var_dump($result);

	$sql = "INSERT INTO tb_alunos ( nome , email , senha , cpf , rg ) VALUES ('Teste123','teste@teste', '123','123','123')";

	$result = $con->exec($sql);

	var_dump($result);

	$sql = "INSERT INTO tb_alunos ( nome , email , senha , cpf , rg ) VALUES ('Teste456','teste456@teste', '123','123','123')";

	$result = $con->exec($sql);

	var_dump($result);

	$con->commit();

} catch (PDOException $e) {

	$con->rollback();
	echo $e->getMessage();
}
