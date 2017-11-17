<?php 

require_once 'conexao.php';

 // 	[id] => 2
 //    	[nome] => Lucas César Marques
 //    	[email] => lucasmarques73@hotmail.com
 //    	[senha] => 123
 //    	[cpf] => 10815386605
 //    	[rg] => 123456
 //    	[dt_nasc] => 

$nome = "Teste";
$email = "teste@teste";
$senha = "123";
$cpf = "123";
$rg = "123";

$sql = "INSERT INTO tb_alunos ( nome , email , senha , cpf , rg ) VALUES ('Teste','teste@teste', '123','123','123')";


var_dump($con);
$result = $con->exec($sql);

var_dump($result);